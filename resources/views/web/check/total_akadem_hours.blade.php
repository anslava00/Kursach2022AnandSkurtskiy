<h1>Общее время академических часов</h1>
            <div>
                <div >
                    <h2>
                        Лабораторные интер.: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_experts" @isset($total_akadem_hours) value="{{$total_akadem_hours->experts}}" @endisset class="input3" type="text" placeholder="Эксперты">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практика: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_to_plan" @isset($total_akadem_hours) value="{{$total_akadem_hours->to_plan}}" @endisset class="input3" type="text" placeholder="В плане">
                    </h2>
                </div>
                <div >
                    <h2>
                        Практика интер.: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_control_work" @isset($total_akadem_hours) value="{{$total_akadem_hours->control_work}}" @endisset class="input3" type="text" placeholder="Контрольные работы">
                    </h2>
                </div>
                <div >
                    <h2>
                        Самостоятельные работы: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_SR" @isset($total_akadem_hours) value="{{$total_akadem_hours->SR}}" @endisset class="input3" type="text" placeholder="Самостоятельные работы">
                    </h2>
                </div>
                <div >
                    <h2>
                        Контрольные: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_kontrol" @isset($total_akadem_hours) value="{{$total_akadem_hours->kontrol}}" @endisset class="input3" type="text" placeholder="Контрольные">
                    </h2>
                </div>
                <div >
                    <h2>
                        Часы интер.: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_inter_hour" @isset($total_akadem_hours) value="{{$total_akadem_hours->inter_hour}}" @endisset class="input3" type="text" placeholder="Часы интер.">
                    </h2>
                </div>
                <div>
                    <h2>
                        Пр. подготовки: <input @unlessrole('admin') readonly @endunlessrole name="total_akadem_hours_pr_podgot" @isset($total_akadem_hours) value="{{$total_akadem_hours->pr_podgot}}" @endisset class="input3" type="text" placeholder="Пр. подготовки">
                    </h2>
                </div>
            </div>