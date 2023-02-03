        <tr>
            <td><b>Детская художественная школа</b></td>
            <td>Детская художественная школа</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dhsh_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dhsh_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dhsh']['dhsh310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 18)
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
            <td><b>Детская музыкальная школа</b></td>
            <td>Детская музыкальная школа</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>  
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dmsh_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dmsh_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr> 
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['dmsh']['dmsh310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 19)
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