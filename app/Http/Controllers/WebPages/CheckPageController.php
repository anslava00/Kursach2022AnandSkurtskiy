<?php

namespace App\Http\Controllers\WebPages;

use App\Models\Competencies\Competencies;
use App\Models\Competencies\SubCompetencies;
use App\Models\RPDS;
use App\Models\time\TimeForRPD;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use PhpParser\ErrorHandler\Collecting;

class CheckPageController extends Controller
{
    public function check_page_Form()
    {
        $user = Auth::user();
        $rpds = RPDS::all();
        
        return view('web.check_page', ['user' => $user,
                                        'chooseSelect' => 1,
                                        'rpds' => $rpds,]);
    }

    public function check_page(Request $request)
    {
        $user = Auth::user();
        $rpds = RPDS::all();
        $userRpd = RPDS::find($request->chooseRpd);
        switch($request->EditFooterBTN){
            case 'edit':
                $time_for_RPD = $userRpd->timeForRPD;
                $time_for_RPD->course = $request->time_for_RPD_course;
                $time_for_RPD->semester = $request->time_for_RPD_semester;
                $time_for_RPD->c_u = $request->time_for_RPD_c_u;
                $time_for_RPD->lectures = $request->time_for_RPD_lectures;
                $time_for_RPD->laboratory = $request->time_for_RPD_laboratory;
                $time_for_RPD->laboratory_inter = $request->time_for_RPD_laboratory_inter;
                $time_for_RPD->practice = $request->time_for_RPD_practice;
                $time_for_RPD->practice_inter = $request->time_for_RPD_practice_inter;
                $time_for_RPD->KSP = $request->time_for_RPD_KSP;
                $time_for_RPD->OK = $request->time_for_RPD_OK;
                $time_for_RPD->SP = $request->time_for_RPD_SP;
                $time_for_RPD->control = $request->time_for_RPD_control;
                $time_for_RPD->save();

                $total_akadem_hours = $userRpd->totalAkademHours;
                $total_akadem_hours->experts = $request->total_akadem_hours_experts;
                $total_akadem_hours->to_plan = $request->total_akadem_hours_to_plan;
                $total_akadem_hours->control_work = $request->total_akadem_hours_control_work;
                $total_akadem_hours->SR = $request->total_akadem_hours_SR;
                $total_akadem_hours->kontrol = $request->total_akadem_hours_kontrol;
                $total_akadem_hours->inter_hour = $request->total_akadem_hours_inter_hour;
                $total_akadem_hours->pr_podgot = $request->total_akadem_hours_pr_podgot;
                $total_akadem_hours->save();

                $form_control = $userRpd->formControl;
                $form_control->examination = $request->form_control_examination;
                $form_control->zachet = $request->form_control_zachet;
                $form_control->zachet_with_grade = $request->form_control_zachet_with_grade;
                $form_control->KP = $request->form_control_KP;
                $form_control->KR = $request->form_control_KR;
                $form_control->control = $request->form_control_control;
                $form_control->RGR = $request->form_control_RGR;
                $form_control->save();

                $credit_units = $userRpd->creditUnits;
                $credit_units->experts = $request->credit_units_experts;
                $credit_units->fackts = $request->credit_units_fackts;
                $credit_units->hour_in_c_u = $request->credit_units_hour_in_c_u;
                $credit_units->save();

                $departament = $userRpd->departaments;
                $departament->abbreviathion = $request->departament_abbreviathion;
                $departament->title = $request->departament_title;
                $departament->save();

                $basic_information = $userRpd->BasicInformation;
                $basic_information->purpose = $request->basic_information_purpose;
                $basic_information->task = $request->basic_information_task;
                $basic_information->save();

                $theoretical_parts = $basic_information->theoretical;
                $theoretical_parts->lectures = $request->theoretical_parts_lectures;
                $theoretical_parts->save();

                $practical_and_independent_parts = $basic_information->practical;
                $practical_and_independent_parts->laboratory = $request->practical_and_independent_parts_laboratory;
                $practical_and_independent_parts->tasks_for_independent_work = $request->practical_and_independent_parts_tasks_for_independent_work;
                $practical_and_independent_parts->save();

                $educational_and_methodological_supports = $basic_information->educAndMethodSupport;
                $educational_and_methodological_supports->graph_for_independent_work = $request->educational_and_methodological_supports_graph_for_independent_work;
                $educational_and_methodological_supports->recomendation_for_independent_work = $request->educational_and_methodological_supports_recomendation_for_independent_work;
                $educational_and_methodological_supports->metodic_recomendation_for_independent_work = $request->educational_and_methodological_supports_metodic_recomendation_for_independent_work;
                $educational_and_methodological_supports->grade_for_independent_work = $request->educational_and_methodological_supports_grade_for_independent_work;
                $educational_and_methodological_supports->metodic_recomendation_for_ecce = $request->educational_and_methodological_supports_metodic_recomendation_for_ecce;
                $educational_and_methodological_supports->save();

                $list_of_literatures = $basic_information->listOfLiterature;
                $list_of_literatures->list_literature = $request->list_of_literatures_list_literature;
                $list_of_literatures->more_literature = $request->list_of_literatures_more_literature;
                $list_of_literatures->list_internet = $request->list_of_literatures_list_internet;
                $list_of_literatures->save();
                
                $methodological_instructions = $basic_information->methodInstructions;
                $methodological_instructions->metodic_instruction = $request->methodological_instructions_metodic_instruction;
                $methodological_instructions->save();

                $material_tex_productions = $basic_information->materialProduction;
                $material_tex_productions->place = $request->material_tex_productions_place;
                $material_tex_productions->equipment = $request->material_tex_productions_equipment;
                $material_tex_productions->licensed_software = $request->material_tex_productions_licensed_software;
                $material_tex_productions->save();

                $valuation_funds = $basic_information->valuationFunds;
                $valuation_funds->evaluation_tools = $request->valuation_funds_evaluation_tools;
                $valuation_funds->general_information = $request->valuation_funds_general_information;
                $valuation_funds->general_evaluation_tools = $request->valuation_funds_general_evaluation_tools;
                $valuation_funds->methodological_instructions = $request->valuation_funds_methodological_instructions;
                $valuation_funds->questions_offset = $request->valuation_funds_questions_offset;
                $valuation_funds->grade_questions_offset = $request->valuation_funds_grade_questions_offset;
                $valuation_funds->oral_question = $request->valuation_funds_oral_question;
                $valuation_funds->grade_oral_question = $request->valuation_funds_grade_oral_question;
                $valuation_funds->presentation = $request->valuation_funds_presentation;
                $valuation_funds->grade_presentation = $request->valuation_funds_grade_presentation;
                $valuation_funds->ecce = $request->valuation_funds_ecce;
                $valuation_funds->grade_ecce = $request->valuation_funds_grade_ecce;
                $valuation_funds->laboratory = $request->valuation_funds_laboratory;
                $valuation_funds->grade_laboratory = $request->valuation_funds_grade_laboratory;
                $valuation_funds->coontrol_word = $request->valuation_funds_coontrol_word;
                $valuation_funds->grade_control_work = $request->valuation_funds_grade_control_work;
                $valuation_funds->creative_task = $request->valuation_funds_creative_task;
                $valuation_funds->grade_creative_task = $request->valuation_funds_grade_creative_task;
                $valuation_funds->save();

                $competencies = collect();
                $sub_competencies = collect();
                foreach($userRpd->rpdAndCompetencies as $relation){
                    $foundCompetencies = Competencies::find($relation->competencies_id);
                    $competencies->push($foundCompetencies);
                    foreach($foundCompetencies->subCompetencies as $SubCompetencie){
                        $sub_competencies->push($SubCompetencie);
                    }
                }

                // echo $request->competencies_title."<br>";
                // echo $request->competencies_type_competencies."<br>";
                // echo $request->competencies_task."<br>";
                // echo $request->competencies_source."<br>";
                // echo $request->competencies_object."<br>";
                // echo $request->competencies_type_group."<br>";
                // echo $request->sub_competencies_title."<br>";
                // echo $request->sub_competencies_description."<br>";
            break;
            case  'get':
                $time_for_RPD = $userRpd->timeForRPD;
                $total_akadem_hours = $userRpd->totalAkademHours;
                $form_control = $userRpd->formControl;
                $credit_units = $userRpd->creditUnits;
                $departament = $userRpd->departaments;

                $basic_information = $userRpd->BasicInformation;

                $theoretical_parts = $basic_information->theoretical;
                $practical_and_independent_parts = $basic_information->practical;
                $educational_and_methodological_supports = $basic_information->educAndMethodSupport;
                $list_of_literatures = $basic_information->listOfLiterature;
                $methodological_instructions = $basic_information->methodInstructions;
                $material_tex_productions = $basic_information->materialProduction;
                $valuation_funds = $basic_information->valuationFunds;
                $competencies = collect();
                $sub_competencies = collect();
                foreach($userRpd->rpdAndCompetencies as $relation){
                    $foundCompetencies = Competencies::find($relation->competencies_id);
                    $competencies->push($foundCompetencies);
                    foreach($foundCompetencies->subCompetencies as $SubCompetencie){
                        $sub_competencies->push($SubCompetencie);
                    }
                }
            break;
        }
        return view('web.check_page', [
            'user' => $user,
            'rpds' => $rpds,
            'chooseSelect' => $request->chooseRpd,
            'time_for_RPD' => $time_for_RPD,
            'total_akadem_hours' => $total_akadem_hours,
            'form_control' => $form_control,
            'credit_units' => $credit_units,
            'departament' => $departament,
            'basic_information' => $basic_information,
            'theoretical_parts' => $theoretical_parts,
            'practical_and_independent_parts' => $practical_and_independent_parts,
            'educational_and_methodological_supports' => $educational_and_methodological_supports,
            'list_of_literatures' => $list_of_literatures,
            'methodological_instructions' => $methodological_instructions,
            'material_tex_productions' => $material_tex_productions,
            'valuation_funds' => $valuation_funds,
            'competencies' => $competencies,
            'sub_competencies' => $sub_competencies,
        ]);
    
    }


}
