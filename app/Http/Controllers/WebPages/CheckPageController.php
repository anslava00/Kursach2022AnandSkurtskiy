<?php

namespace App\Http\Controllers\WebPages;

use App\Models\RPDS;
use App\Models\time\TimeForRPD;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CheckPageController extends Controller
{
    public function check_page_Form(Request $request)
    {
        $user = Auth::user();
        $rpds = RPDS::all();
        $userRpd = RPDS::find($request->chooseRpd);
        if (!empty( $userRpd)){
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
            $valuation_funds = $basic_information->valuation_funds;
            // $competencies
            // $sub_competencies
            return view('web.check_page', ['user' => $user,
                                           'rpds' => $rpds,
                                           'time_for_RPD' => $time_for_RPD,
                                           'total_akadem_hours' => $total_akadem_hours,
                                           'form_control' => $form_control,
                                           'credit_units' => $credit_units,
                                           'departament' => $departament,
                                           'theoretical_parts' => $theoretical_parts,
                                           'practical_and_independent_parts' => $practical_and_independent_parts,
                                           'educational_and_methodological_supports' => $educational_and_methodological_supports,
                                           'list_of_literatures' => $list_of_literatures,
                                           'methodological_instructions' => $methodological_instructions,
                                           'material_tex_productions' => $material_tex_productions,
                                           'valuation_funds' => $valuation_funds,]);
        }
        return view('web.check_page', ['user' => $user,
                                        'rpds' => $rpds,]);
    }

    public function check_page(Request $request)
    {
        $user = Auth::user();
        $rpds = RPDS::all();
        $userRpd = RPDS::find($request->chooseRpd);

        return redirect(route('check_page', ['user' => $user,
                                             'rpds' => $rpds,]));
    }


}
