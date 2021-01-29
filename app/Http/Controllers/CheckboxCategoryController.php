<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\ProgramsCategory;

class CheckboxCategoryController extends Controller
{
    private $checkboxCategoryRequest;
    private $data;

    public function __construct(Array $checkboxCategoryRequest, Array $data)
    {
        $this->checkboxCategoryRequest = $checkboxCategoryRequest;
        $this->data = $data;
    }

    public function check() {

        $programsCategory = ProgramsCategory::all();
        $programsCategoriesId = array();

        foreach ($this->checkboxCategoryRequest as $checkboxId) {
            foreach ($programsCategory as $progCategoryId) {
                if ($progCategoryId->category_id == $checkboxId) {
                    array_push($programsCategoriesId, $progCategoryId->program_id);
                }
            }
        }

        $checkedData = array();
        foreach ($this->data as $item) {
            foreach ($programsCategoriesId as $id) {
                if($item->id == $id) {
                    array_push($checkedData, $item);
                }
            }
        }

        return $checkedData;
    }
}
