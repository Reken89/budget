        <tr>
            <td><b>Вокнаволокская средняя общеобразовательная школа</b></td>
            <td>Вокнаволокская средняя общеобразовательная школа</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['vsosh_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['vsosh_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['vsosh']['vsosh310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 8)
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
        
