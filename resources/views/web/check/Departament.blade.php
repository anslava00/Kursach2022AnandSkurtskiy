<h1>Департамент</h1>
            <div>
                <div >
                    <h3>Аббревиатура</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="departament_abbreviathion"  cols="80" rows="1" id="bigWind" placeholder="Аббревиатура">@isset($departament){{$departament->abbreviathion}} @endisset</textarea>
                </div>
                <div >
                    <h3>Название</h3>

                    <textarea @unlessrole('admin') readonly @endunlessrole name="departament_title"  cols="80" rows="1" id="bigWind" placeholder="Титул">@isset($departament){{$departament->title}}@endisset</textarea>
                </div>
            </div>
