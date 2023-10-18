<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::latest()->paginate(6);
        return view('frontend.vacancies.vacancies',compact('vacancies'));
    }
    public function detail($language,$id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('frontend.vacancies.detail',compact('vacancy'));
    }
    public function search()
    {
        $search_text = $_GET['search'];
        $vacancies = Vacancy::where('title','LIKE','%'.$search_text.'%')->get();
        return view('frontend.vacancies.search-vacancies',compact('vacancies'));
    }
}
