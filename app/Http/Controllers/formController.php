<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formModel;
use App\elementFormModel;
class formController extends Controller
{
	//show form them form
    public function getAddForm()
    {
    	return view('form.addForm');
    }


    //lấy dữ liệu từ form gửi về

    public function postAddForm(Request $request)
    {
    	//thêm form vào cơ sở dữ liệu
    	$dulieu=$request->all();

    	$dataForm=new formModel;
    	$dataForm->name=$dulieu['form_name'];
    	$dataForm->des=$dulieu['form_des'];
    	$dataForm->save();
    	$data=formModel::where('name',$dulieu['form_name'])->get()->toArray();
    	 $id=$data[0]['id'];
		$inputType=$request->inputType;
    	$inputName=$request->inputName;
    	$inputPlace=$request->inputPlace;
	   for ($i=0; $i<=count($inputType); $i++) { 
	   	
	   		if(!empty($inputType[$i])||!empty($inputName[$i])||!empty($inputPlace[$i]))
	   		{
	   			$data=new elementFormModel;
		   		$data->name_input=$inputName[$i];

		   		$data->type_input=$inputType[$i];
		   		$data->place_input=$inputPlace[$i];
		   		$data->id_form=$id;
		   		$data->save();
	   		}
	   		
	   		
	   }
	   return redirect()->route('getAddForm');
    	
    }


    //show danh sách form
    public function listForm()
    {
    	$showForm=formModel::all()->toArray();
    	return view('form.list_form',['dulieu'=>$showForm]);
    }

    //show form sửa dữ liệu trong form

    public function getEditForm($id)
    {
    	$dataForm=formModel::find($id)->toArray();

    	$dataElement=formModel::find($id)->elementForm->toArray();
    	
    	return view('form.editForm',['dataForm'=>$dataForm,'dataElement'=>$dataElement]);
    }


    //sửa form trong cơ sở dữ liệu
    public function postEditForm(Request $request,$idForm)
    {
    	$dulieu=$request->all();
    	$dataForm=formModel::find($idForm);
    	$dataForm->name=$dulieu['form_name'];
    	$dataForm->des=$dulieu['form_des'];
    	$dataForm->save();
    	$idF=$idForm;
		$inputType=$request->inputType;
    	$inputName=$request->inputName;
    	$inputPlace=$request->inputPlace;
    	$idFromForm=$request->id;
	   for ($i=0; $i<=count($inputType); $i++) { 
	   	
	   		if(!empty($inputType[$i])||!empty($inputName[$i])||!empty($inputPlace[$i]))
	   		{
	   			$data=elementFormModel::find($idFromForm[$i]);
		   		$data->name_input=$inputName[$i];

		   		$data->type_input=$inputType[$i];
		   		$data->place_input=$inputPlace[$i];
		   		$data->id_form=$idF;
		   		$data->save();
	   		}
	   		
	   		
	   }
	   return redirect()->route('getAddForm');
    }


    //thực hiện xóa form theo id
    public function deleteForm($id)
    {
    	$id=formModel::find($id);
    	if($id->delete())
    	{
    		return redirect()->route('listForm');
    	}

    }
}
