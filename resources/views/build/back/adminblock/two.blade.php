        <tr>
            <td><b>Средняя общеобразовательная школа №1</b></td>
            <td class="col-id-no" scope="row">Средняя общеобразовательная школа №1</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_one_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_one']['sosh_one530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 3)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="3">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>Средняя общеобразовательная школа №2</b></td>
            <td class="col-id-no" scope="row">Средняя общеобразовательная школа №2</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_two_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_two']['sosh_two530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 4)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="4">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>Средняя общеобразовательная школа №3</b></td>
            <td class="col-id-no" scope="row">Средняя общеобразовательная школа №3</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_three_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sosh_three']['sosh_three530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 5)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="5">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>МБОУ КГО Гимназия</b></td>
            <td class="col-id-no" scope="row">МБОУ КГО Гимназия</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['gimnazia_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['gimnazia']['gimnazia530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 7)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="7">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>МБОУ КГО Лицей</b></td>
            <td class="col-id-no" scope="row">МБОУ КГО Лицей</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['licei_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['licei_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['licei']['licei530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 6)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="6">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>Детско-юношеская спортивная школа №2</b></td>
            <td class="col-id-no" scope="row">Детско-юношеская спортивная школа №2</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['sport_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sport_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['sport']['sport530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 16)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="16">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>Центр внешкольной работы</b></td>
            <td class="col-id-no" scope="row">Центр внешкольной работы</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['cvr_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['cvr_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cvr']['cvr530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 17)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="17">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>Муниципальный архив и центральная библиотека</b></td>
            <td class="col-id-no" scope="row">Муниципальный архив и центральная библиотека</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['library_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['library_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['library']['library241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['library']['library414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['library']['library530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['library']['library530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 20)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="20">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>Центр культурного развития</b></td>
            <td class="col-id-no" scope="row">Центр культурного развития</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['ckr_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['ckr_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['ckr']['ckr530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 21)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="21">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td><b>Центр развития образования</b></td>
            <td class="col-id-no" scope="row">Центр развития образования</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['cro_ekr']['ekr_one']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro_ekr']['ekr_one']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['cro_ekr']['ekr_one']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro_ekr']['ekr_one']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro_ekr']['ekr_one']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['cro']['cro530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 22)
                <tr>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td class="col-id-no" scope="row">{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="work_id" value="{{ $value['work_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="year" value="{{ $value['year'] }}">
                        <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td><input type="text" class="ekr_double" value="{{ $value['work']['ekr_double'] }}"></td>
                        <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>                        
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
        
        @if ($info['many_mounth'] == 'no')
            <tr>
                <input type="hidden" class="user_id" value="22">
                <input type="hidden" class="mounth" value="{{ $info['mounth_double'] }}">
                <input type="hidden" class="year" value="{{ $info['year_double'] }}">
                <td><input type=button class="button" id='btn_two' value='Добавить'></td>
                <td class="col-id-no" scope="row"><textarea rows='5' cols='45' type=text class='title'>Новая запись</textarea></td>
                <td><input type=text class='ekr'></td>
                <td><input type=text class='ekr_double'></td>
                <td></td>
                <td><input type=text class='fu_sum'></td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        @endif

        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ОБЩИЙ ИТОГ</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ number_format($info['ekr']['total_ekr']['total']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total_ekr']['total']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['total_ekr']['total']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total_ekr']['total']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total_ekr']['total']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ОБЩИЙ ИТОГ</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total241']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total241']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['total']['total241']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total241']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total241']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ОБЩИЙ ИТОГ</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total414']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total414']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['total']['total414']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total414']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total414']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td class="col-id-no" scope="row"><b>ОБЩИЙ ИТОГ</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total530']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total530']['fu'], 2, ',', ' ') }}</b></td>
            <td></td><td></td>
            <td><b>{{ number_format($info['ekr']['total']['total530']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total530']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['total']['total530']['fact'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
