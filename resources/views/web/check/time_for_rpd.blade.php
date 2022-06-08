<h1>time_for_RPD</h1>
            <div >
                <div>
                    <h2>
                        Курс: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_course" @isset($time_for_RPD) value="{{$time_for_RPD->course}}" @endisset class="input3" type="text" placeholder="Курс">
                    </h2>
                </div>
                <div >
                    <h2>
                        Семестр: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_semester" @isset($time_for_RPD) value="{{$time_for_RPD->semester}}" @endisset class="input3" type="text" placeholder="Семестр">
                    </h2>
                </div>
                <div >
                    <h2>
                        Зачётные единицы: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_c_u" @isset($time_for_RPD) value="{{$time_for_RPD->c_u}}" @endisset class="input3" type="text" placeholder="Зачётные единицы">
                    </h2>
                </div>
                <div >
                    <h2>
                        Лекции: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_lectures" @isset($time_for_RPD) value="{{$time_for_RPD->lectures}}" @endisset class="input3" type="text" placeholder="Лекции">
                    </h2>
                </div>
                <div >
                    <h2>
                        Лабораторные: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_laboratory" @isset($time_for_RPD) value="{{$time_for_RPD->laboratory}}" @endisset class="input3" type="text" placeholder="Лабораторнын">
                    </h2>
                </div>
                <div >
                    <h2>
                        Лабораторные интер.: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_laboratory_inter" @isset($time_for_RPD) value="{{$time_for_RPD->laboratory_inter}}" @endisset class="input3" type="text" placeholder="Лабараторные интер">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практика: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_practice" @isset($time_for_RPD) value="{{$time_for_RPD->practice}}" @endisset class="input3" type="text"  placeholder="Практика">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практика интер.: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_practice_inter" @isset($time_for_RPD) value="{{$time_for_RPD->practice_inter}}" @endisset class="input3" type="text" placeholder="Практика интер">
                    </h2>
                </div>
                <div >
                    <h2>
                        КСП: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_KSP" @isset($time_for_RPD) value="{{$time_for_RPD->KSP}}" @endisset class="input3" type="text" placeholder="КСП">
                    </h2>
                </div>
                <div >
                    <h2>
                        ОК: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_OK" @isset($time_for_RPD) value="{{$time_for_RPD->OK}}" @endisset class="input3" type="text" placeholder="ОК">
                    </h2>
                </div>
                <div >
                    <h2>
                        СП: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_SP" @isset($time_for_RPD) value="{{$time_for_RPD->SP}}" @endisset class="input3" type="text" placeholder="СП">
                    </h2>
                </div>
                <div >
                    <h2>
                        Контроль: <input @unlessrole('admin') readonly @endunlessrole name="time_for_RPD_control" @isset($time_for_RPD) value="{{$time_for_RPD->control}}" @endisset class="input3" type="text" placeholder="Контроль">
                    </h2>
                </div>
            </div>