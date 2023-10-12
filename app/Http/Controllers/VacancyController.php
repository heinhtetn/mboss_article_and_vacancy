<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VacancyController extends Controller
{

    public function index(Request $request) {

        if($request->ajax())
        {
            $vacancies = Vacancy::query();

            return DataTables::of($vacancies)

                ->editColumn('created_at', function($e) {
                    return Carbon::parse($e->created_at)->format("F j, Y, g:i a");
                })

                ->addColumn('action', function($a) {

                    $details = "<a href='/admin/vacancies/$a->id' class='btn btn-primary' style='margin-right: 10px'>Details</a>";
                    $edit = '<a href=" '.route('vacancies.edit', $a->id).'" class="btn btn-success" style="margin-right: 10px;">Edit</a>';
                    $delete = '<a href="" class="deleteButton btn btn-danger" data-id="'. $a->id .'">Delete</a>';

                    return '<div class="action">' . $details  . $edit . $delete . '</div>';

                })->rawColumns(['action'])->make(true);
        }

        return view('backend.vacancies.index');
    }

    public function show($id) {
        return view('backend.vacancies.show' , [
           'vacancy' => Vacancy::findOrFail($id)
        ]);
    }

    public function create() {
        return view('backend.vacancies.create');
    }

    public function store(Request $request) {
        $attributes = $this->validateVacancy($request);

        $attributes['genders'] = implode(',', $attributes['genders']);

        Vacancy::create($attributes);

        return redirect('/admin/vacancies')->with('create', 'Vacancy');
    }

    public function edit($id) {
        return view('backend.vacancies.edit', [
           'vacancy' => Vacancy::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id) {
        $attributes = $this->validateVacancy($request);

        $attributes['genders'] = implode(',', $attributes['genders']);

        Vacancy::findOrFail($id)->update($attributes);

        return redirect("/admin/vacancies/$id")->with('update', 'Vacancy');
    }

    public function destroy($id) {
        Vacancy::findOrFail($id)->delete();

        return 'success';
    }

    private function validateVacancy(Request $request) {
        return $request->validate([
           'title' => 'required',
           'type' => 'required',
           'description' => 'required',
           'requirements' => 'required',
           'salary' => 'required',
           'post_qty' => 'required|numeric|min:1',
           'working_hours' => 'required',
           'benefits' => 'required',
           'email' => 'required|email',
           'phone' => 'required',
           'address' => 'required',
           'genders' => 'required',
           'deadline' => 'required',
        ]);
    }

}
