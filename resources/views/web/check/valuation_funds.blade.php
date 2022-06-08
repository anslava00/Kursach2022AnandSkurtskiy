<div>
                <h2>ФОНДЫ ОЦЕНОЧНЫХ СРЕДСТВ</h2>
{{--                valuation_funds--}}
                <div >
                    <h3>Оценочные средства для промежуточной аттестации</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_evaluation_tools" cols="140" rows="10" id="bigWind" placeholder="Оценочные средства для промежуточной аттестации">@isset($valuation_funds){{$valuation_funds->evaluation_tools}}@endisset </textarea>
                </div>
                <div >
                    <h3>Методические указания по сдаче зачета</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_general_information" cols="140" rows="10" id="bigWind" placeholder="Методические указания по сдаче зачета"> @isset($valuation_funds) {{$valuation_funds->general_information}} @endisset</textarea>
                </div>
                <div >
                    <h3>Перечень лицензионного программного обеспечения.</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_general_evaluation_tools" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."> @isset($valuation_funds) {{$valuation_funds->general_evaluation_tools}} @endisset</textarea>
                </div>
                <div >
                    <h3>Реквизиты подтверждающего документа</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_methodological_instructions" cols="140" rows="10" id="bigWind" placeholder="Реквизиты подтверждающего документа"> @isset($valuation_funds){{$valuation_funds->methodological_instructions}} @endisset</textarea>
                </div>
                <div >
                    <h3>Вопросы к зачету</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_questions_offset" cols="140" rows="10" id="bigWind" placeholder="Вопросы к зачету"> @isset($valuation_funds) {{$valuation_funds->questions_offset}}@endisset</textarea>
                </div>
                <div >
                    <h3>Критерии выставления оценки студенту на зачете</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_questions_offset" cols="140" rows="10" id="bigWind" placeholder="Критерии выставления оценки студенту на зачете"> @isset($valuation_funds){{$valuation_funds->grade_questions_offset}} @endisset </textarea>
                </div>
                <div >
                    <h3>Оценочные средства для текущей аттестации</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_oral_question" cols="140" rows="10" id="bigWind" placeholder="Оценочные средства для текущей аттестации"> @isset($valuation_funds) {{$valuation_funds->oral_question}} @endisset</textarea>
                </div>
                <div >
                    <h3>Вопросы для собеседования / устного опроса</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_oral_question" cols="140" rows="10" id="bigWind" placeholder="Вопросы для собеседования / устного опроса"> @isset($valuation_funds) {{$valuation_funds->grade_oral_question}} @endisset</textarea>
                </div>
                <div >
                    <h3>Критерии оценивания</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_presentation" cols="140" rows="10" id="bigWind" placeholder="Критерии оценивания"> @isset($valuation_funds){{$valuation_funds->presentation}} @endisset</textarea>
                </div>
                <div >
                    <h3>Тематика презентаций</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_presentation" cols="140" rows="10" id="bigWind" placeholder="Тематика презентаций"> @isset($valuation_funds) {{$valuation_funds->grade_presentation}} @endisset</textarea>
                </div>
                <div >
                    <h3>Критерии оценки презентации</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_ecce" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки презентации"> @isset($valuation_funds){{$valuation_funds->ecce}} @endisset</textarea>
                </div>
                <div >
                    <h3>Тематика эссе</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_ecce" cols="140" rows="10" id="bigWind" placeholder="Тематика эссе"> @isset($valuation_funds){{$valuation_funds->grade_ecce}} @endisset</textarea>
                </div>
                <div >
                    <h3>Критерии оценки эссе</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_laboratory" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки эссе"> @isset($valuation_funds) {{$valuation_funds->laboratory}} @endisset</textarea>
                </div>
                <div >
                    <h3>Тематика лабораторных работ</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_laboratory" cols="140" rows="10" id="bigWind" placeholder="Тематика лабораторных работ"> @isset($valuation_funds){{$valuation_funds->grade_laboratory}} @endisset</textarea>
                </div>
                <div >
                    <h3>Критерии оценки лабораторных работ</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_coontrol_word" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки лабораторных работ"> @isset($valuation_funds){{$valuation_funds->coontrol_word}} @endisset</textarea>
                </div>
                <div >
                    <h3>Тематика контрольно-расчетных работ</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_control_work"  cols="140" rows="10" id="bigWind" placeholder="Тематика контрольно-расчетных работ">@isset($valuation_funds){{$valuation_funds->grade_control_work}} @endisset</textarea>
                </div>
                <div >
                    <h3>Критерии оценки контрольно-расчетных работ</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_creative_task" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки контрольно-расчетных работ"> @isset($valuation_funds){{$valuation_funds->creative_task}}@endisset</textarea>
                </div>
                <div >
                    <h3>Творческие задания</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_grade_creative_task" cols="140" rows="10" id="bigWind" placeholder="Творческие задания"> @isset($valuation_funds) {{$valuation_funds->grade_creative_task}} @endisset</textarea>
                </div>
{{--                <div >--}}
{{--                    <h3>Устный опрос</h3>--}}
{{--                    <textarea @unlessrole('admin') readonly @endunlessrole name="valuation_funds_" value="{{$valuation_funds->}}" cols="140" rows="10" id="bigWind" placeholder="Устный опрос"></textarea>--}}
{{--                </div>--}}
                {{--                <h3>Устный опрос </h3>--}}
                {{--                <h3>Письменные работы</h3>--}}
            </div>