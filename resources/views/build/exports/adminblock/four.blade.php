        <tr>
            <td><b>Администрация</b></td>
            <td>Администрация</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['adm_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['adm_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['adm_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['adm_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['adm_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['adm']['adm225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['adm']['adm225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['adm']['adm226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['adm']['adm226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['adm']['adm228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['adm']['adm228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['adm']['adm344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['adm']['adm344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['adm']['adm346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['adm']['adm346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['adm']['adm310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['adm']['adm310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['adm']['adm310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 25)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
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
            <td><b>КУМС</b></td>
            <td>КУМС</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>  
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['kums_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['kums_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['kums_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['kums_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['kums_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr> 
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['kums']['kums225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['kums']['kums225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['kums']['kums226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['kums']['kums226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['kums']['kums228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['kums']['kums228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['kums']['kums344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['kums']['kums344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['kums']['kums346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['kums']['kums346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['kums']['kums310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['kums']['kums310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['kums']['kums310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 23)
                <tr>
                    <td></td>
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
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
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
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
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['total']['total225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['total']['total226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['total']['total228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['total']['total344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['total']['total346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ОБЩИЙ ИТОГ</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['total']['total310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['total']['total310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['total']['total310']['fact'] }}</b></td>
            <td></td>
        </tr>


