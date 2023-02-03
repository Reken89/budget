        <tr>
            <td><b>Средняя общеобразовательная школа №1</b></td>
            <td>Средняя общеобразовательная школа №1</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['sosh_one_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_one_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_one']['sosh_one530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 3)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach

        <tr>
            <td><b>Средняя общеобразовательная школа №2</b></td>
            <td>Средняя общеобразовательная школа №2</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['sosh_two_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_two_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_two']['sosh_two530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 4)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach

        <tr>
            <td><b>Средняя общеобразовательная школа №3</b></td>
            <td>Средняя общеобразовательная школа №3</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['sosh_three_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_three_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sosh_three']['sosh_three530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 5)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach       

        <tr>
            <td><b>МБОУ КГО Гимназия</b></td>
            <td>МБОУ КГО Гимназия</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['gimnazia_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gimnazia_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gimnazia']['gimnazia530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 7)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach
        
        <tr>
            <td><b>МБОУ КГО Лицей</b></td>
            <td>МБОУ КГО Лицей</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['licei_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['licei_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['licei_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['licei_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['licei_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['licei']['licei241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['licei']['licei241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['licei']['licei414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['licei']['licei414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['licei']['licei530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['licei']['licei530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['licei']['licei530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 6)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach
        
        <tr>
            <td><b>Детско-юношеская спортивная школа №2</b></td>
            <td>Детско-юношеская спортивная школа №2</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['sport_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sport_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sport_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sport_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sport_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['sport']['sport241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sport']['sport241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['sport']['sport414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sport']['sport414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['sport']['sport530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['sport']['sport530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['sport']['sport530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 16)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach
        
        <tr>
            <td><b>Центр внешкольной работы</b></td>
            <td>Центр внешкольной работы</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['cvr_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['cvr_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['cvr']['cvr241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['cvr']['cvr414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['cvr']['cvr530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['cvr']['cvr530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 17)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach
        
        <tr>
            <td><b>Муниципальный архив и центральная библиотека</b></td>
            <td>Муниципальный архив и центральная библиотека</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['library_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['library_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['library_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['library_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['library_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['library']['library241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['library']['library241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['library']['library414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['library']['library414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['library']['library530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['library']['library530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['library']['library530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 20)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach
        
        <tr>
            <td><b>Центр культурного развития</b></td>
            <td>Центр культурного развития</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['ckr_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['ckr_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['ckr']['ckr241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['ckr']['ckr414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['ckr']['ckr530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['ckr']['ckr530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 21)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach
        
        <tr>
            <td><b>Центр развития образования</b></td>
            <td>Центр развития образования</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['cro_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['cro_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['cro_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['cro_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['cro_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['cro']['cro241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['cro']['cro241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['cro']['cro414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['cro']['cro414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['cro']['cro530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['cro']['cro530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['cro']['cro530']['fact'] }}</b></td>
            <td></td>
        </tr>       
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 22)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td>{{ $value['work']['ekr_double'] }}</td>
                        <td>{{ $value['build_sum'] }}</td>
                        <td>{{ $value['fu_sum'] }}</td>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['contract_sum'] }}</td>
                        <td>{{ $value['kassa_sum'] }}</td>
                        <td>{{ $value['fact_sum'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                </tr>
            @endif
        @endforeach
        
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b></b></td>
            <td><b>ВСЕ</b></td>
            <td><b>{{ $info['ekr']['total_ekr']['total']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total_ekr']['total']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total_ekr']['total']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total_ekr']['total']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total_ekr']['total']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b></b></td>
            <td><b>241</b></td>
            <td><b>{{ $info['ekr']['total']['total241']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total241']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total241']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total241']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total241']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b></b></td>
            <td><b>414</b></td>
            <td><b>{{ $info['ekr']['total']['total414']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total414']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total414']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total414']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total414']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b></b></td>
            <td><b>530</b></td>
            <td><b>{{ $info['ekr']['total']['total530']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total530']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total530']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total530']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total530']['fact'] }}</b></td>
            <td></td>
        </tr>


