<h1>Форма контроля</h1>
            <div>
                <div >
                    <h2>
                        Экзаминация: <input @unlessrole('admin') readonly @endunlessrole name="form_control_examination" @isset($form_control) value="{{$form_control->examination}}" @endisset class="input3" type="text" placeholder="Экзаминация">
                    </h2>
                </div>
                <div >
                    <h2>
                        Зачёт: <input @unlessrole('admin') readonly @endunlessrole name="form_control_zachet" @isset($form_control) value="{{$form_control->zachet}}" @endisset class="input3"  type="text" placeholder="Зачёт">
                    </h2>
                </div>
                <div >
                    <h2>
                        Зачёт с оценкой: <input @unlessrole('admin') readonly @endunlessrole name="form_control_zachet_with_grade" @isset($form_control) value="{{$form_control->zachet_with_grade}}" @endisset class="input3" type="text" placeholder="Зачёт с оценкой">
                    </h2>
                </div>
                <div >
                    <h2>
                        КП: <input @unlessrole('admin') readonly @endunlessrole name="form_control_KP" @isset($form_control) value="{{$form_control->KP}}" @endisset class="input3" type="text" placeholder="КП">
                    </h2>
                </div>
                <div >
                    <h2>
                        КР: <input @unlessrole('admin') readonly @endunlessrole name="form_control_KR" @isset($form_control) value="{{$form_control->KR}}" @endisset class="input3" type="text" placeholder="КР">
                    </h2>
                </div>
                <div >
                    <h2>
                        Контроль: <input @unlessrole('admin') readonly @endunlessrole name="form_control_control" @isset($form_control) value="{{$form_control->control}}" @endisset class="input3" type="text" placeholder="Контроль">
                    </h2>
                </div>
                <div >
                    <h2>
                        РГР: <input @unlessrole('admin') readonly @endunlessrole name="form_control_RGR" @isset($form_control) value="{{$form_control->RGR}}" @endisset class="input3" type="text" placeholder="РГР">
                    </h2>
                </div>
            </div>