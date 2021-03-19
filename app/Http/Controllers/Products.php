<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
class Products extends Controller
{
    //
    function excelData()
    {
    	echo"controller called";
    	return Excel::download(new ProductExport, 'productdata.xlsx');
    	
    }
}
class ProductExport implements FromCollection
    {
    	public function collection ()
    	{
    		return Product::all(); 
    	}
    }

