        <tr>
            <td><b>МКДОУ Ауринко</b></td>
            <td>МКДОУ Ауринко</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['aurinko_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['aurinko_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['aurinko']['aurinko310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 9)
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
            <td><b>МКДОУ Березка</b></td>
            <td>МКДОУ Березка</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['berezka_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['berezka_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['berezka']['berezka225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['berezka']['berezka226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['berezka']['berezka228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['berezka']['berezka344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['berezka']['berezka346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['berezka']['berezka310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['berezka']['berezka310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 10)
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
            <td><b>МКДОУ Гномик</b></td>
            <td>МКДОУ Гномик</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['gnomik_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gnomik_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['gnomik']['gnomik310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 11)
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
            <td><b>МКДОУ Золотой Ключик</b></td>
            <td>МКДОУ Золотой Ключик</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['zoloto_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['zoloto_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['zoloto']['zoloto310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 12)
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
            <td><b>МКДОУ Кораблик</b></td>
            <td>МКДОУ Кораблик</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['korablik_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['korablik_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['korablik']['korablik225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['korablik']['korablik226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['korablik']['korablik228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['korablik']['korablik344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['korablik']['korablik346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['korablik']['korablik310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['korablik']['korablik310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 13)
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
            <td><b>МКДОУ Сказка</b></td>
            <td>МКДОУ Сказка</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['skazka_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['skazka_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['skazka']['skazka225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['skazka']['skazka226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['skazka']['skazka228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['skazka']['skazka344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['skazka']['skazka346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['skazka']['skazka310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['skazka']['skazka310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 14)
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
            <td><b>МКДОУ Солнышко</b></td>
            <td>МКДОУ Солнышко</td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>ВСЕ</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['solnishko_ekr']['ekr_one']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko_ekr']['ekr_one']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['solnishko_ekr']['ekr_one']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko_ekr']['ekr_one']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko_ekr']['ekr_one']['fact'] }}</b></td>
            <td></td>
        </tr>    
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko225']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko225']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko225']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko225']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko225']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko226']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko226']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko226']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko226']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko226']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko228']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko228']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko228']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko228']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko228']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko344']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko344']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko344']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko344']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko344']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko346']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko346']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko346']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko346']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko346']['fact'] }}</b></td>
            <td></td>
        </tr>
        <tr>
            <td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko310']['build'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko310']['fu'] }}</b></td>
            <td></td><td></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko310']['contract'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko310']['kassa'] }}</b></td>
            <td><b>{{ $info['ekr']['solnishko']['solnishko310']['fact'] }}</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 15)
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