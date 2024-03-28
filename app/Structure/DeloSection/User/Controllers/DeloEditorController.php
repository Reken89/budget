<?php

namespace App\Structure\DeloSection\User\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\DeloSection\User\Actions\DeloEditorAction;
use App\Structure\DeloSection\User\Actions\DeloExaminAction;
use App\Structure\DeloSection\User\Actions\DeloUpdateDocAction;
use App\Structure\DeloSection\User\Requests\DeloDocUpdateRequest;
use App\Structure\DeloSection\User\Dto\DeloDocUpdateDto;

class DeloEditorController extends Controller
{
     /**
     * Front отрисовка редактора
     *
     * @param int $id
     * @return 
     */
    public function FrontView(int $id)
    {
        session(['doc_id' => $id]);
        return view('delo.editor');   
    }
    
     /**
     * Back отрисовка редактора
     *
     * @param 
     * @return 
     */
    public function EditorView()
    {
        $id = session('doc_id');
        $info = $this->action(DeloEditorAction::class)->SelectInfo($id); 
        return view('delo.back.editor', ['info' => $info]);         
    }
    
    /**
     * Обновляем информацию в таблице documents
     * Обновляем по id
     *
     * @param 
     * @return 
     */
    public function UpdateDoc(DeloDocUpdateRequest $request)
    {
        $dto = DeloDocUpdateDto::fromRequest($request);
        if($dto->exception == $dto->number){
            $examin = false;
        }else{
            $examin = $this->action(DeloExaminAction::class)->ExaminNumber($dto->number, $dto->variant);
        }
        
        if($examin == true){
            return "Номер занят...";
        }else{
            $result = $this->action(DeloUpdateDocAction::class)->UpdateDoc($dto);
            if($result){
                return "Информация обновлена!";
            }
        }       
    }
    
}
