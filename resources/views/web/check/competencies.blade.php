<h1>Компетенции</h1>
            @isset($competencies)
                @role('admin')
                    <input hidden name="countCompetenciese" id = "countC" value = "{{$competencies->count()}}">
                    <input hidden name="countSubCompetenciese" id = "countSubC" value = "{{$sub_competencies->count()}}">
                   <button type="button" name="AddBTN" onclick="return addField('comp', {{$competencies->count()}})">Добавить поле</button>
                @endrole
            @endisset
            <div class="competencies_titles">
                <div class="comp_item">
                    <h3>Название</h3>
                </div>
                <div class="comp_item">
                    <h3>Тип компетенции</h3>
                </div>
                <div class="comp_item">
                    <h3>Тип задач</h3>
                </div>
                <div class="comp_item">
                    <h3>Источник</h3>
                </div>
                <div class="comp_item">
                    <h3>Объект</h3>
                </div>
                <div class="comp_item">
                    <h3>Тип</h3>
                </div>
            </div>
            <div id="parentId2">
                <div class="competencies">
                    <div>
                        @isset($competencies)
                            @foreach($competencies as $competencie)
                                <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_title{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Титул">{{$competencie->title}}</textarea>
                            @endforeach
                        @endisset
                    </div>
                    <div >
                        @isset($competencies)
                            @foreach($competencies as $competencie)
                                <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_type_competencies{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Тип компетенции">{{$competencie->type_competencies}}</textarea>
                            @endforeach
                        @endisset
                    </div>
                    <div >
                        @isset($competencies)
                            @foreach($competencies as $competencie)
                                <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_task{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Задача">{{$competencie->task}}</textarea>
                            @endforeach
                        @endisset
                    </div>
                    <div >
                        @isset($competencies)
                            @foreach($competencies as $competencie)
                                <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_source{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Источник">{{$competencie->source}}</textarea>
                            @endforeach
                        @endisset
                    </div>
                    <div >
                        @isset($competencies)
                            @foreach($competencies as $competencie)
                                <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_object{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Объект">{{$competencie->object}}</textarea>
                            @endforeach
                        @endisset
                    </div>
                    <div >
                        @isset($competencies)
                            @foreach($competencies as $competencie)
                                <textarea class="text_area_noresize" @unlessrole('admin') readonly @endunlessrole name="competencies_type_group{{$loop->index}}"  cols="30" rows="10" id="bigWind" placeholder="Тип">{{$competencie->type_group}}</textarea>
                            @endforeach
                        @endisset
                    </div>
                    @isset($competencies)
                        @foreach($competencies as $competencie)
                            @role('admin')
                                <button type="button" name="DeleteBTN" onclick="return deleteField(this, 'comp')">X</button>
                            @endrole
                        @endforeach
                    @endisset
                </div>
            </div>
