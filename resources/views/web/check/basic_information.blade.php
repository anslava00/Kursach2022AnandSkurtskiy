<h1>Базовая информация</h1>
            <div>
{{--                basic_information--}}
                <div >
                    <h3>Цели: </h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="basic_information_purpose" cols="140" rows="10" id="bigWind" placeholder="Цели"> @isset($basic_information) {{$basic_information->purpose}} @endisset</textarea>
                </div>
                <div >
                    <h3>Задачи: </h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="basic_information_task" cols="140" rows="10" id="bigWind" placeholder="Задачи">@isset($basic_information) {{$basic_information->task}} @endisset </textarea>
                </div>
            </div>
            <div>
                <h2>СТРУКТУРА И СОДЕРЖАНИЕ ТЕОРЕТИЧЕСКОЙ ЧАСТИ КУРСА</h2>
                {{--            theoretical_parts --}}
                <div >
                    <h3>Лекционные занятия: </h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="theoretical_parts_lectures"  cols="140" rows="10" id="bigWind" placeholder="Лекционные занятия">@isset($theoretical_parts){{$theoretical_parts->lectures}} @endisset</textarea>
                </div>
            </div>
            <div>
                <h2>СТРУКТУРА И СОДЕРЖАНИЕ ПРАКТИЧЕСКОЙ ЧАСТИ КУРСА И САМОСТОЯТЕЛЬНОЙ РАБОТЫ </h2>
{{--                practical_and_independent_parts--}}
                <div >
                    <h3>Лабораторные работы </h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="practical_and_independent_parts_laboratory"  cols="140" rows="10" id="bigWind" placeholder="Лабораторные работы ">@isset($practical_and_independent_parts) {{$practical_and_independent_parts->laboratory}} @endisset</textarea>
                </div>
                <div >
                    <h3>Материалы для выполнения лабораторных работ</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="practical_and_independent_parts_tasks_for_independent_work"  cols="140" rows="10" id="bigWind" placeholder="Материалы для выполнения лабораторных работ">@isset($practical_and_independent_parts) {{$practical_and_independent_parts->tasks_for_independent_work}} @endisset</textarea>
                </div>
            </div>
            <div>
                <h2>УЧЕБНО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ САМОСТОЯТЕЛЬНОЙ РАБОТЫ ОБУЧАЮЩИХСЯ</h2>
{{--                educational_and_methodological_supports--}}
                <div >
                    <h3>План-график выполнения самостоятельной работы по дисциплине</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_graph_for_independent_work"  cols="140" rows="10" id="bigWind" placeholder="План-график выполнения самостоятельной работы по дисциплине">@isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->graph_for_independent_work}} @endisset</textarea>
                </div>
                <div >
                    <h3>Рекомендации по самостоятельной работе студентов</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_recomendation_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Рекомендации по самостоятельной работе студентов">@isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->recomendation_for_independent_work}} @endisset</textarea>
                </div>
                <div >
                    <h3>Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки.</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_metodic_recomendation_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Методические рекомендации по выполнению заданий для самостоятельной работы и критерии оценки. ">@isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->metodic_recomendation_for_independent_work}} @endisset</textarea>
                </div>
                <div >
                    <h3>Методические рекомендации по написанию эссе</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_grade_for_independent_work"   cols="140" rows="10" id="bigWind" placeholder="Методические рекомендации по написанию эссе">@isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->grade_for_independent_work}}@endisset</textarea>
                </div>
                <div >
                    <h3>Критерии оценки.</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="educational_and_methodological_supports_metodic_recomendation_for_ecce" cols="140" rows="10" id="bigWind" placeholder="Критерии оценки."> @isset($educational_and_methodological_supports) {{$educational_and_methodological_supports->metodic_recomendation_for_ecce}} @endisset </textarea>
                </div>
            </div>
            <div>
                <h2>КОНТРОЛЬ ДОСТИЖЕНИЯ ЦЕЛЕЙ КУРСА</h2>
                <h3></h3>
            </div>
            <div>
                <h2>СПИСОК УЧЕБНОЙ ЛИТЕРАТУРЫ И ИНФОРМАЦИОННО-МЕТОДИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
{{--                list_of_literatures--}}
                <div >
                    <h3>Основная литература</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="list_of_literatures_list_literature" cols="140" rows="10" id="bigWind" placeholder="Основная литература">@isset($list_of_literatures) {{$list_of_literatures->list_literature}} @endisset </textarea>
                </div>
                <div >
                    <h3>Дополнительная литература</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="list_of_literatures_more_literature" cols="140" rows="10" id="bigWind" placeholder="Дополнительная литература"> @isset($list_of_literatures) {{$list_of_literatures->more_literature}} @endisset</textarea>
                </div>
                <div >
                    <h3>Перечень ресурсов информационно-телекоммуникационной сети
                        «Интернет»
                    </h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="list_of_literatures_list_internet" cols="140" rows="10" id="bigWind" placeholder="Перечень ресурсов информационно-телекоммуникационной сети «Интернет»">@isset($list_of_literatures) {{$list_of_literatures->list_internet}} @endisset </textarea>
                </div>

            </div>
            <div>
                <h2>МЕТОДИЧЕСКИЕ УКАЗАНИЯ ПО ОСВОЕНИЮ ДИСЦИПЛИНЫ</h2>
{{--                methodological_instructions--}}
                <div >
                    <h3>Методические инструкции</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="methodological_instructions_metodic_instruction" cols="140" rows="10" id="bigWind" placeholder="Методические инструкции">@isset($methodological_instructions) {{$methodological_instructions->metodic_instruction}} @endisset </textarea>
                </div>
            </div>
            <div>
                <h2>МАТЕРИАЛЬНО-ТЕХНИЧЕСКОЕ ОБЕСПЕЧЕНИЕ ДИСЦИПЛИНЫ</h2>
{{--                material_tex_productions--}}
                <div >
                    <h3>Наименование специальных помещений и помещений для самостоятельной работы</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="material_tex_productions_place" cols="140" rows="10" id="bigWind" placeholder="Наименование специальных помещений и помещений для самостоятельной работы"> @isset($material_tex_productions) {{$material_tex_productions->place}} @endisset</textarea>
                </div>
                <div >
                    <h3>Оснащенность специальных помещений и помещений для самостоятельной работы </h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="material_tex_productions_equipment"cols="140" rows="10" id="bigWind" placeholder="Оснащенность специальных помещений и помещений для самостоятельной работы"> @isset($material_tex_productions) {{$material_tex_productions->equipment}} @endisset </textarea>
                </div>
                <div >
                    <h3>Перечень лицензионного программного обеспечения.</h3>
                    <textarea @unlessrole('admin') readonly @endunlessrole name="material_tex_productions_licensed_software" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."> @isset($material_tex_productions) {{$material_tex_productions->licensed_software}} @endisset</textarea>
                </div>
{{--                <div >--}}
{{--                    <h3>Реквизиты подтверждающего документа</h3>--}}
{{--                    <textarea @unlessrole('admin') readonly @endunlessrole name="material_tex_productions_" value="{{$material_tex_productions->}}" cols="140" rows="10" id="bigWind" placeholder="Перечень лицензионного программного обеспечения."></textarea>--}}
{{--                </div>--}}
            </div>