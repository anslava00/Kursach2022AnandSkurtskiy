<h1>Зачётные единицы</h1>
            <div>
                <div >
                    <h3>Экспертное</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="credit_units_experts"  cols="80" rows="2" id="bigWind" placeholder="Эксперты">@isset($credit_units) {{$credit_units->experts}} @endisset </textarea>
                </div>
                <div >
                    <h3>По факту</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="credit_units_fackts"  cols="80" rows="2" id="bigWind" placeholder="Факты">@isset($credit_units) {{$credit_units->fackts}} @endisset</textarea>
                </div>
                <div >
                    <h3>Часов в зачётной единице</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="credit_units_hour_in_c_u"  cols="80" rows="2" id="bigWind" placeholder="Часов в зачётной единице">@isset($credit_units){{$credit_units->hour_in_c_u}} @endisset</textarea>
                </div>
{{--                <div >--}}
{{--                    <h2>--}}
{{--                        Эксперты: <input @unlessrole('admin') readonly @endunlessrole class="input3" type="text" placeholder="Эксперты">--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                    <h2>--}}
{{--                        Факты: <input @unlessrole('admin') readonly @endunlessrole class="input3" type="text" placeholder="Факты">--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div >--}}
{{--                    <h2>--}}
{{--                        Часов в зачётной единице: <input @unlessrole('admin') readonly @endunlessrole class="input3" type="text" placeholder="Часов в зачётной единице">--}}
{{--                    </h2>--}}
{{--                </div>--}}
            </div>
