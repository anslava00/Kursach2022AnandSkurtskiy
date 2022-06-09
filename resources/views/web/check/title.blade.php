<h1>Титульник</h1>
            <div >
                <div>
                    <h2>
                        Название дисциплины: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_semester" @isset($time_for_RPD) value="{{$time_for_RPD->semester}}" @endisset class="input3" type="text" placeholder="Семестр">
                    </h2>
                </div>
                <div >
                    <h2>
                        Семестр: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_semester" @isset($time_for_RPD->semester) value="{{$time_for_RPD->semester}}" @endisset class="input3" type="text" placeholder="Семестр">
                    </h2>
                </div>
                <div>
                    <h2>
                        Курс: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_course" @isset($time_for_RPD->course) value="{{$time_for_RPD->course}}" @endisset class="input3" type="text" placeholder="Курс (автоматически/ или указать)">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практические занятия: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_practice" @isset($time_for_RPD->practice) value="{{$time_for_RPD->practice}}" @endisset class="input3" type="text"  placeholder="Не предусмотрены/ указать время (часы)">
                    </h2>
                </div>
                <div >
                    <h2>
                        Лабораторные работы: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_laboratory" @isset($time_for_RPD->laboratory) value="{{$time_for_RPD->laboratory}}" @endisset class="input3" type="text" placeholder="Лабораторные работы (часы)">
                    </h2>
                </div>
                <div>
                    <h2>
                        Часы аудиторной нагрузки: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_experts" @isset($total_akadem_hours->experts) value="{{$total_akadem_hours->experts}}" @endisset class="input3" type="text" placeholder="(часы)">
                    </h2>
                </div>
                <div >
                    <h2>
                        Самостоятельная работа: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_SP" @isset($time_for_RPD->SP) value="{{$time_for_RPD->SP}}" @endisset class="input3" type="text" placeholder="Часы выделенные на самостоятельную работу">
                    </h2>
                </div>
                <div>
                    <h2>
                        Время на подготовку к экзамену: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_kontrol" @isset($total_akadem_hours->kontrol) value="{{$total_akadem_hours->kontrol}}" @endisset class="input3" type="text" placeholder="(часы)">
                    </h2>
                </div>
                <div>
                    <h2>
                        Контрольные работы (количество): <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_control_work" @isset($total_akadem_hours->control_work) value="{{$total_akadem_hours->control_work}}" @endisset class="input3" type="text" placeholder="(часы)">
                    </h2>
                </div>
                <div>
                    <h2>
                        Курсовая работа <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_KR" @isset($form_control->KR) value="{{$form_control->KR}}" @endisset class="input3" type="text" placeholder="(не предусмотрен/ указать семестр)">
                    </h2>
                </div>
                <div>
                    <h2>
                        Курсовой проект: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_KP" @isset($form_control->KP) value="{{$form_control->KP}}" @endisset class="input3" type="text" placeholder="(не предусмотрен/ указать семестр)">
                    </h2>
                </div>
                <div>
                    <h2>
                        Зачёт: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_zachet" @isset($form_control->zachet) value="{{$form_control->zachet}}" @endisset class="input3" type="text" placeholder=" (не предусмотрен/ указать семестр)">
                    </h2>
                </div>
                <div>
                    <h2>
                        Экзамен: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_examination" @isset($form_control->examination) value="{{$form_control->examination}}" @endisset class="input3" type="text" placeholder=" (не предусмотрен/ указать семестр)">
                    </h2>
                </div>
            </div>
