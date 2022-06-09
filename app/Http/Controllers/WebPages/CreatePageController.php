<?php

namespace App\Http\Controllers\WebPages;

use App\Imports\RPDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\basicInformation\BasicInformation;
use App\Models\basicInformation\educationalAndMethodologicalSupports;
use App\Models\basicInformation\listOfLiteratures;
use App\Models\basicInformation\materialTexProduction;
use App\Models\basicInformation\methodologicalInstructions;
use App\Models\basicInformation\practicalAndIndependentPart;
use App\Models\basicInformation\theoreticalPart;
use App\Models\basicInformation\valuationFunds;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\RPDS;
use App\Sanitizer\IntegerSanitizer;
use App\Models\Competencies\Competencies;
use App\Models\departaments;
use App\Models\time\CreditUnits;
use App\Models\time\FormControl;
use App\Models\time\TimeForRPD;
use App\Models\time\TotalAkademHours;
use PhpParser\Node\Expr\FuncCall;
use SimpleXMLElement;
use Shuchkin\SimpleXLSX;
class CreatePageController extends Controller
{
    public function create_page_Form()
    {
        $user = Auth::user();
        return view('web.create_page', ['user' => $user]);
    }

    public function create_page(Request $request)
    {
        $user = Auth::user();
        switch($request->EditFooterBTN){
            case 'create':
            $rpds = new RPDS;
            $rpds->discipline = $request->chooseRpd;
            $rpds->abbreviathion = IntegerSanitizer::sanitizeString($request->departament_abbreviathion);//debug
            $rpds->user_id = $user->id;
            $rpds->save();

            $time_for_RPD = new TimeForRPD;
            $time_for_RPD->course = IntegerSanitizer::sanitizeString( $request->time_for_RPD_course);
            $time_for_RPD->semester = IntegerSanitizer::sanitizeString( $request->time_for_RPD_semester);
            $time_for_RPD->c_u = IntegerSanitizer::sanitizeString( $request->time_for_RPD_c_u);
            $time_for_RPD->lectures = IntegerSanitizer::sanitizeString( $request->time_for_RPD_lectures);
            $time_for_RPD->laboratory = IntegerSanitizer::sanitizeString( $request->time_for_RPD_laboratory);
            $time_for_RPD->laboratory_inter = IntegerSanitizer::sanitizeString( $request->time_for_RPD_laboratory_inter);
            $time_for_RPD->practice = IntegerSanitizer::sanitizeString( $request->time_for_RPD_practice);
            $time_for_RPD->practice_inter = IntegerSanitizer::sanitizeString( $request->time_for_RPD_practice_inter);
            $time_for_RPD->KSP = IntegerSanitizer::sanitizeString( $request->time_for_RPD_KSP);
            $time_for_RPD->OK = IntegerSanitizer::sanitizeString( $request->time_for_RPD_OK);
            $time_for_RPD->SP = IntegerSanitizer::sanitizeString( $request->time_for_RPD_SP);
            $time_for_RPD->control = IntegerSanitizer::sanitizeString( $request->time_for_RPD_control);
            $time_for_RPD->r_p_d_s_id = $rpds->id;
            $time_for_RPD->save();

            $total_akadem_hours = new TotalAkademHours;
            $total_akadem_hours->experts = IntegerSanitizer::sanitizeString( $request->total_akadem_hours_experts);
            $total_akadem_hours->to_plan = IntegerSanitizer::sanitizeString( $request->total_akadem_hours_to_plan);
            $total_akadem_hours->control_work = IntegerSanitizer::sanitizeString( $request->total_akadem_hours_control_work);
            $total_akadem_hours->SR = IntegerSanitizer::sanitizeString( $request->total_akadem_hours_SR);
            $total_akadem_hours->kontrol = IntegerSanitizer::sanitizeString( $request->total_akadem_hours_kontrol);
            $total_akadem_hours->inter_hour = IntegerSanitizer::sanitizeString( $request->total_akadem_hours_inter_hour);
            $total_akadem_hours->pr_podgot = IntegerSanitizer::sanitizeString( $request->total_akadem_hours_pr_podgot);
            $total_akadem_hours->r_p_d_s_id = $rpds->id;
            $total_akadem_hours->save();

            $form_control = new FormControl;
            $form_control->examination = IntegerSanitizer::sanitizeString( $request->form_control_examination);
            $form_control->zachet = IntegerSanitizer::sanitizeString( $request->form_control_zachet);
            $form_control->zachet_with_grade = IntegerSanitizer::sanitizeString( $request->form_control_zachet_with_grade);
            $form_control->KP = IntegerSanitizer::sanitizeString( $request->form_control_KP);
            $form_control->KR = IntegerSanitizer::sanitizeString( $request->form_control_KR);
            $form_control->control = IntegerSanitizer::sanitizeString( $request->form_control_control);
            $form_control->RGR = IntegerSanitizer::sanitizeString( $request->form_control_RGR);
            $form_control->r_p_d_s_id = $rpds->id;
            $form_control->save();

            $credit_units = new CreditUnits;
            $credit_units->experts = IntegerSanitizer::sanitizeString( $request->credit_units_experts);
            $credit_units->fackts = IntegerSanitizer::sanitizeString( $request->credit_units_fackts);
            $credit_units->hour_in_c_u = IntegerSanitizer::sanitizeString( $request->credit_units_hour_in_c_u);
            $credit_units->r_p_d_s_id = $rpds->id;
            $credit_units->save();

            $departament = new departaments;
            $departament->abbreviathion = IntegerSanitizer::sanitizeString($request->departament_abbreviathion);
            $departament->title = IntegerSanitizer::sanitizeString($request->departament_title);
            $departament->r_p_d_s_id = $rpds->id;
            $departament->save();

            $basic_information = new BasicInformation;
            $basic_information->purpose = IntegerSanitizer::sanitizeString($request->basic_information_purpose);
            $basic_information->task = IntegerSanitizer::sanitizeString($request->basic_information_task);
            $basic_information->r_p_d_s_id = $rpds->id;
            $basic_information->save();

            $theoretical_parts = new theoreticalPart;
            $theoretical_parts->lectures = IntegerSanitizer::sanitizeString($request->theoretical_parts_lectures);
            $theoretical_parts->basic_information_id = $basic_information->id;
            $theoretical_parts->save();

            $practical_and_independent_parts = new practicalAndIndependentPart;
            $practical_and_independent_parts->laboratory = IntegerSanitizer::sanitizeString($request->practical_and_independent_parts_laboratory);
            $practical_and_independent_parts->tasks_for_independent_work = IntegerSanitizer::sanitizeString($request->practical_and_independent_parts_tasks_for_independent_work);
            $practical_and_independent_parts->basic_information_id = $basic_information->id;
            $practical_and_independent_parts->save();

            $educational_and_methodological_supports = new educationalAndMethodologicalSupports;
            $educational_and_methodological_supports->graph_for_independent_work = IntegerSanitizer::sanitizeString($request->educational_and_methodological_supports_graph_for_independent_work);
            $educational_and_methodological_supports->recomendation_for_independent_work = IntegerSanitizer::sanitizeString($request->educational_and_methodological_supports_recomendation_for_independent_work);
            $educational_and_methodological_supports->metodic_recomendation_for_independent_work = IntegerSanitizer::sanitizeString($request->educational_and_methodological_supports_metodic_recomendation_for_independent_work);
            $educational_and_methodological_supports->grade_for_independent_work = IntegerSanitizer::sanitizeString($request->educational_and_methodological_supports_grade_for_independent_work);
            $educational_and_methodological_supports->metodic_recomendation_for_ecce = IntegerSanitizer::sanitizeString($request->educational_and_methodological_supports_metodic_recomendation_for_ecce);
            $educational_and_methodological_supports->basic_information_id = $basic_information->id;
            $educational_and_methodological_supports->save();

            $list_of_literatures = new listOfLiteratures;
            $list_of_literatures->list_literature = IntegerSanitizer::sanitizeString($request->list_of_literatures_list_literature);
            $list_of_literatures->more_literature = IntegerSanitizer::sanitizeString($request->list_of_literatures_more_literature);
            $list_of_literatures->list_internet = IntegerSanitizer::sanitizeString($request->list_of_literatures_list_internet);
            $list_of_literatures->basic_information_id = $basic_information->id;
            $list_of_literatures->save();

            $methodological_instructions = new methodologicalInstructions;
            $methodological_instructions->metodic_instruction = IntegerSanitizer::sanitizeString($request->methodological_instructions_metodic_instruction);
            $methodological_instructions->basic_information_id = $basic_information->id;
            $methodological_instructions->save();

            $material_tex_productions = new materialTexProduction;
            $material_tex_productions->place = IntegerSanitizer::sanitizeString($request->material_tex_productions_place);
            $material_tex_productions->equipment = IntegerSanitizer::sanitizeString($request->material_tex_productions_equipment);
            $material_tex_productions->licensed_software = IntegerSanitizer::sanitizeString($request->material_tex_productions_licensed_software);
            $material_tex_productions->basic_information_id = $basic_information->id;
            $material_tex_productions->save();

            $valuation_funds = new valuationFunds;
            $valuation_funds->evaluation_tools = IntegerSanitizer::sanitizeString($request->valuation_funds_evaluation_tools);
            $valuation_funds->general_information = IntegerSanitizer::sanitizeString($request->valuation_funds_general_information);
            $valuation_funds->general_evaluation_tools = IntegerSanitizer::sanitizeString($request->valuation_funds_general_evaluation_tools);
            $valuation_funds->methodological_instructions = IntegerSanitizer::sanitizeString($request->valuation_funds_methodological_instructions);
            $valuation_funds->questions_offset = IntegerSanitizer::sanitizeString($request->valuation_funds_questions_offset);
            $valuation_funds->grade_questions_offset = IntegerSanitizer::sanitizeString($request->valuation_funds_grade_questions_offset);
            $valuation_funds->oral_question = IntegerSanitizer::sanitizeString($request->valuation_funds_oral_question);
            $valuation_funds->grade_oral_question = IntegerSanitizer::sanitizeString($request->valuation_funds_grade_oral_question);
            $valuation_funds->presentation = IntegerSanitizer::sanitizeString($request->valuation_funds_presentation);
            $valuation_funds->grade_presentation = IntegerSanitizer::sanitizeString($request->valuation_funds_grade_presentation);
            $valuation_funds->ecce = IntegerSanitizer::sanitizeString($request->valuation_funds_ecce);
            $valuation_funds->grade_ecce = IntegerSanitizer::sanitizeString($request->valuation_funds_grade_ecce);
            $valuation_funds->laboratory = IntegerSanitizer::sanitizeString($request->valuation_funds_laboratory);
            $valuation_funds->grade_laboratory = IntegerSanitizer::sanitizeString($request->valuation_funds_grade_laboratory);
            $valuation_funds->coontrol_word = IntegerSanitizer::sanitizeString($request->valuation_funds_coontrol_word);
            $valuation_funds->grade_control_work = IntegerSanitizer::sanitizeString($request->valuation_funds_grade_control_work);
            $valuation_funds->creative_task = IntegerSanitizer::sanitizeString($request->valuation_funds_creative_task);
            $valuation_funds->grade_creative_task = IntegerSanitizer::sanitizeString($request->valuation_funds_grade_creative_task);
            $valuation_funds->basic_information_id = $basic_information->id;
            $valuation_funds->save();

            // $competencies = collect();
            // $sub_competencies = collect();
            // foreach($userRpd->rpdAndCompetencies as $relation){
            //     $foundCompetencies = Competencies::find($relation->competencies_id);
            //     $competencies->push($foundCompetencies);
            //     foreach($foundCompetencies->subCompetencies as $SubCompetencie){
            //         $sub_competencies->push($SubCompetencie);
            //     }
            // }

            // for ($i = $request->countCompetenciese; $i >= 0; $i--) {
            //     if (!empty($request['competencies_title'.$i])){
            //         foreach($competencies as $competencie){
            //             if ($competencie->title == $request['competencies_title'.$i]);
            //             $competencie->save();
            //         }
            //     }

            // }
            break;
            case 'get':
            $excelFile =public_path().'/exel/ex.xlsx';
            $xlsx = SimpleXLSX::parse($excelFile);	
            $indexList = 0;
            $findList = 'План';
            $time_for_RPD = new TimeForRPD;
            $form_control = new FormControl;
            $total_akadem_hours = new TotalAkademHours;
            $credit_units = new CreditUnits;
            $departament = new departaments;
            $rpds = collect();
            foreach ($xlsx->sheetNames() as $list){
                if ($list == $findList){
                    $sheet = $xlsx->rows($indexList);
                    foreach($sheet as $row){
                        $rpd = new RPDS;
                        $rpd->discipline = $row[2];
                        $rpds->push($rpd);
                        if ($row[2] == $request->chooseRpd){
                            $course = "";
                            for($i = 3; $i < 6; $i++){
                                foreach(str_split($row[$i]) as $r){
                                    if (strpos($course, $r) === false){
                                        $course = $course.$r.',';
                                    }
                                }
                            }
                            $semester = "";
                            for($i = 3; $i < 6; $i++){
                                foreach(str_split($row[$i]) as $r){
                                    $tmpCour = $this->checkVal($r);
                                    if (strpos($semester, $tmpCour) === false){
                                        $semester = $semester.$tmpCour.',';
                                    }
                                }
                            }
                            $lecture = 0;
                            $Cols = [21, 31, 42, 52, 62, 72, 83, 92];
                            foreach($Cols as $col){
                                $lecture = $lecture + (int)$row[$col];
                            }
                            $lab = 0;
                            $Cols = [22, 33, 43, 53, 63, 74, 84, 93];
                            foreach($Cols as $col){
                                $lab = $lab + (int)$row[$col];
                            }
                            $labInter = 0;
                            $Cols = [23, 34, 44, 54, 64, 75, 85, 94];
                            foreach($Cols as $col){
                                $labInter = $labInter + (int)$row[$col];
                            }
                            $practic = 0;
                            $Cols = [24, 35, 45, 55, 65, 76, 86, 95];
                            foreach($Cols as $col){
                                $practic = $practic + (int)$row[$col];
                            }
                            $KSP = 0;
                            $Cols = [26, 37, 47, 57, 67, 78, 87, 97];
                            foreach($Cols as $col){
                                $KSP = $KSP + (int)$row[$col];
                            }
                            $OK = 0;
                            $Cols = [27, 38, 48, 58, 68, 98];
                            foreach($Cols as $col){
                                $OK = $OK + (int)$row[$col];
                            }
                            $SP = 0;
                            $Cols = [28, 39, 49, 59, 69, 80, 89, 99];
                            foreach($Cols as $col){
                                $SP = $SP + (int)$row[$col];
                            }
                            $contact = 0;
                            $Cols = [29, 40, 50, 60, 70, 81, 90, 100];
                            foreach($Cols as $col){
                                $contact = $contact + (int)$row[$col];
                            }
                            
                            $time_for_RPD->course = $course;
                            $time_for_RPD->semester = $semester;
                            $time_for_RPD->lectures = (string)$lecture;
                            $time_for_RPD->laboratory = (string)$lab;
                            $time_for_RPD->laboratory_inter = (string)$labInter;
                            $time_for_RPD->practice = (string)$practic;
                            $time_for_RPD->KSP = (string)$KSP;
                            $time_for_RPD->OK = (string)$OK;
                            $time_for_RPD->SP = (string)$SP;
                            $time_for_RPD->control = (string)$contact;

                            $form_control->examination = $row[3];
                            $form_control->zachet = $row[4];
                            $form_control->zachet_with_grade = $row[5];
                            $form_control->KP = $row[6];
                            $form_control->KR = $row[7];
                            $form_control->control = $row[8];
                            $form_control->RGR = $row[9];

                            $total_akadem_hours->experts = $row[13];
                            $total_akadem_hours->to_plan = $row[14];
                            $total_akadem_hours->control_work = $row[15];
                            $total_akadem_hours->SR = $row[16];
                            $total_akadem_hours->kontrol = $row[17];
                            $total_akadem_hours->inter_hour = $row[18];
                            $total_akadem_hours->pr_podgot = $row[19];


                            $credit_units->experts = $row[10];
                            $credit_units->fackts = $row[11];
                            $credit_units->hour_in_c_u = $row[12];
                    
                            $departament->title = $row[102];
                        }
                    };
                }
                $indexList++;
            };
            return view('web.create_page', [
                        'chooseSelect' => $request->chooseRpd,
                        'user' => $user,
                        'row' => $request->rows,
                        'sheet' => $request->sheet,
                        'total_akadem_hours' => $total_akadem_hours,
                        'form_control' => $form_control,
                        'credit_units' => $credit_units,
                        'departament' => $departament,
                        'rpds' => $rpds,
                        'time_for_RPD' => $time_for_RPD,
            ]);
            break;
            case 'send':
            if($request->hasFile('test')) {
                $file = $request->file('test');
                $file->move(public_path().'/exel','ex.xlsx');
            }
            $excelFile =public_path().'/exel/ex.xlsx';
            $findList = 'План';
            $xlsx = SimpleXLSX::parse($excelFile);	
            $indexList = 0;

            $rpds = collect();
            foreach ($xlsx->sheetNames() as $list){
                if ($list == $findList){
                    $sheet = $xlsx->rows($indexList);
                    foreach($sheet as $row){
                        $rpd = new RPDS;
                        $rpd->discipline = $row[2];
                        $rpds->push($rpd);
                    };
                }
                $indexList++;
            };
            return view('web.create_page', [
                        'user' => $user,
                        'rpds' => $rpds,
                    ]);
            break;
        }

        return view('web.create_page', ['user' => $user]);
    }

    private function checkVal($val){
        switch ($val){
            case '1':
                $val = "1";
            break;
            case '2':
                $val = "1";
            break;
            case '3':
                $val = "2";
            break;
            case '4':
                $val = "2";
            break;
            case '5':
                $val = "3";
            break;
            case '6':
                $val = "3";
            break;
            case '7':
                $val = "4";
            break;
            case '8':
                $val = "4";
            break;
        }
        return $val;
    }

}
