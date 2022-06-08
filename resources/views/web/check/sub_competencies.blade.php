<h1>Подкомпетенции</h1>
            @isset($sub_competencies)
                @role('admin')
                    <button type="button" name="AddBTN" onclick="return addField('sub_comp', {{$sub_competencies->count()}})">Добавить поле</button>
                @endrole
            @endisset

            <div class="competencies_titles">
                <div class="comp_item">
                    <h3>Титул</h3>
                </div>
                <div class="comp_item">
                    <h3>Описание</h3>
                </div>
            </div>
            <div id="parentId">

                <div class="competencies">
                    <div>
                        @isset($sub_competencies)
                            @foreach($sub_competencies as $sub_competencie)
                                <div>
                                    <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_title{{$loop->index}}" cols="100" rows="10" id="bigWind" placeholder="Титул">{{$sub_competencie->title}}</textarea>
                                    <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_description{{$loop->index}}"  cols="100" rows="10" id="bigWind" placeholder="Описание">{{$sub_competencie->description}}</textarea>
                                    <button type="button" name="DeleteBTN2" onclick="return deleteField(this, 'sub_comp')">X</button>
                                </div>
                            @endforeach
                        @endisset
                    </div>
{{--                        <div>--}}
{{--                            @isset($sub_competencies)--}}
{{--                                @foreach($sub_competencies as $sub_competencie)--}}
{{--                                    <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_title" cols="100" rows="10" id="bigWind" placeholder="Титул">{{$sub_competencie->title}}</textarea>--}}
{{--                                @endforeach--}}
{{--                            @endisset--}}
{{--                        </div>--}}
{{--                        <div >--}}
{{--                            @isset($sub_competencies)--}}
{{--                                @foreach($sub_competencies as $sub_competencie)--}}
{{--                                    <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="sub_competencies_description"  cols="100" rows="10" id="bigWind" placeholder="Описание">{{$sub_competencie->description}}</textarea>--}}
{{--                                @endforeach--}}
{{--                            @endisset--}}
{{--                        </div>--}}
{{--                        @isset($competencies)--}}
{{--                            @foreach($sub_competencies as $sub_competencie)--}}
{{--                                @role('admin')--}}
{{--                                <button type="button" name="DeleteBTN" onclick="return deleteField(this)">X</button>--}}
{{--                                @endrole--}}
{{--                            @endforeach--}}
{{--                        @endisset--}}

                </div>
            </div>