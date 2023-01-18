@extends('layouts.main.main')

@section('title', 'Главная')

@section('header')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection

@section('container')
    @parent
    <h1 class="text-center m-5">Менеджмент 1.0 Базовые навыки руководителя</h1>
    <main style="display: flex; width: 100%; justify-content: center; padding-top: 5px;">
        <div style="max-width: 100%; min-width: 0px; width: 900px;">
            <div class="notion-page-content" style="flex-shrink: 0; flex-grow: 1; max-width: 100%; display: flex; align-items: flex-start; flex-direction: column; font-family: Lyon-Text, Georgia, ui-serif, serif; font-size: 15px; line-height: 1.6; width: 100%; z-index: 4; padding-bottom: 30vh; padding-left: calc(96px + env(safe-area-inset-left)); padding-right: calc(96px + env(safe-area-inset-right));">
                <div class="notion-selectable notion-sub_sub_header-block" style="width: 100%; max-width: 1941px; margin-top: 1em; margin-bottom: 1px;" data-block-id="a07c7f79-40bf-47e5-95d3-db8e3a956058">
                    <div style="display: flex; width: 100%; color: inherit; fill: inherit;">
                        <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; font-family: Lyon-Text, Georgia, ui-serif, serif; font-weight: 600; font-size: 1.25em; line-height: 1.3;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Курс направлен на закрепление навыков успешного руководителя. Вы научитесь эффективной постановки задач, грамотному принятию управленческих решений, делегированию управлению мотивацией персонала. Обучение позволит п<span class="notion-enable-hover" style="font-weight: 600;" data-token-index="1">овысить личную и командную эффективность, сформировать системный подход к построению системы мотивации персонала, развить эмоциональный интеллект.</span></div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="d07262c2-4801-4003-90fe-81e3f1896fda">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; min-height: 1em; color: rgb(55, 53, 47); -webkit-text-fill-color: rgba(55, 53, 47, 0.5);" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-callout-block" style="width: 100%; max-width: 1941px; margin-top: 4px; margin-bottom: 4px;" data-block-id="4e67ebbd-0670-4cc7-ba66-187ce4ed8a98">
                    <div style="display: flex;">
                        <div style="display: flex; width: 100%; border-radius: 3px; background: rgb(241, 241, 239); padding: 16px 16px 16px 12px;">
                            <div>
                                <div class="notion-record-icon notranslate" style="display: flex; align-items: center; justify-content: center; height: 24px; width: 24px; border-radius: 0.25em; flex-shrink: 0;">
                                    <div style="display: flex; align-items: center; justify-content: center; height: 24px; width: 24px;">
                                        <div style="height: 16.8px; width: 16.8px; font-size: 16.8px; line-height: 1; margin-left: 0px; color: black;"><img class="notion-emoji" style="width: 100%; height: 100%; background: url('../images/emoji/twitter-emoji-spritesheet-64.d3a69865.png') 98.3051% 35.5932% / 6000% 6000%;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="➡️" aria-label="➡️"></div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: column; min-width: 0px; margin-left: 8px; width: 100%;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding-left: 2px; padding-right: 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-weight: 600;" data-token-index="0">Цель обучения:</span> освоение инструментов и техник успешного руководителя, формирование навыков постановки задач, дачи обратной связи по результатам выполнения, мотивации сотрудников.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-sub_sub_header-block" style="width: 100%; max-width: 1941px; margin-top: 1em; margin-bottom: 1px;" data-block-id="655ef2b0-9fce-43e1-b980-64a2440cb704">
                    <div style="display: flex; width: 100%; color: inherit; fill: inherit;">
                        <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; font-family: Lyon-Text, Georgia, ui-serif, serif; font-weight: 600; font-size: 1.25em; line-height: 1.3;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-weight: 600;" data-token-index="1">Продолжительность обучения:</span></div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="029b742f-6413-4e1d-87cd-8d525541d20c">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">3 дня обучение офлайн (12 часов: две субботы с 9.00 до 16.00, четверг с 19.00 до 21.00); 3 дня онлайн консультаций; 3 недели самостоятельной отработки навыков.</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="ce0843d4-1c50-4f47-869f-90f2ecb43fa4">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; min-height: 1em; color: rgb(55, 53, 47); -webkit-text-fill-color: rgba(55, 53, 47, 0.5);" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-callout-block" style="width: 100%; max-width: 1941px; margin-top: 4px; margin-bottom: 4px;" data-block-id="a8a34656-3550-4a96-8455-5a8d9591044d">
                    <div style="display: flex;">
                        <div style="display: flex; width: 100%; border-radius: 3px; background: rgb(241, 241, 239); padding: 16px 16px 16px 12px;">
                            <div>
                                <div class="notion-record-icon notranslate" style="display: flex; align-items: center; justify-content: center; height: 24px; width: 24px; border-radius: 0.25em; flex-shrink: 0;">
                                    <div style="display: flex; align-items: center; justify-content: center; height: 24px; width: 24px;">
                                        <div style="height: 16.8px; width: 16.8px; font-size: 16.8px; line-height: 1; margin-left: 0px; color: black;"><img class="notion-emoji" style="width: 100%; height: 100%; background: url('../images/emoji/twitter-emoji-spritesheet-64.d3a69865.png') 96.6102% 50.8475% / 6000% 6000%;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="✅" aria-label="✅"></div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: column; min-width: 0px; margin-left: 8px; width: 100%;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding-left: 2px; padding-right: 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Занятия проходят в интерактивной форме: 20% теории, 80% практики.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="67609ca8-4602-448e-ac99-88b1bf822619">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; min-height: 1em; color: rgb(55, 53, 47); -webkit-text-fill-color: rgba(55, 53, 47, 0.5);" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-sub_header-block" style="width: 100%; max-width: 1941px; margin-top: 1.4em; margin-bottom: 1px;" data-block-id="7427451a-d9f3-487d-a577-15d40b959d45">
                    <div style="display: flex; width: 100%; color: inherit; fill: inherit;">
                        <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; font-family: Lyon-Text, Georgia, ui-serif, serif; font-weight: 600; font-size: 1.5em; line-height: 1.3;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-style: italic; font-weight: 600;" data-token-index="0">Модуль 1.</span><span class="notion-enable-hover" style="font-style: italic;" data-token-index="1"> Результативное целеполагание в управлении</span></div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="ef9bbc86-0601-4396-aa5c-23882142dc0a">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-weight: 600;" data-token-index="0">Тема 1. Управленческий цикл. Компетенции современного руководителя.</span></div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="d48dab4a-1eaf-4f9f-9a21-f4248d164ef4">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Понятие компетенции современного руководителя.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="f3896476-0307-46af-9190-6b2b67550b3c">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Роли руководителя в организации. Современные тенденции менеджмента</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="02bedefd-4cd2-4989-bf38-b6d4bf75f339">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-weight: 600;" data-token-index="0">Тема 2. Постановка задач.</span></div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="67b8319b-6c76-43cd-80e8-1c7094c6cb7a">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Назначение постановки задач в управленческом цикле.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="3f465bbc-5366-4983-96ab-f1cb27405893">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Требования, предъявляемые к формулировке целей. MBO как система управления.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-quote-block" style="width: 100%; max-width: 1941px; margin-top: 4px; margin-bottom: 4px;" data-block-id="58f1bcca-f9e4-43df-aa55-65debe834cee">
                    <div style="font-size: 1em; padding: 3px 2px; color: inherit; fill: inherit; display: flex;">
                        <div style="border-left: 3px solid currentcolor; padding-left: 14px; padding-right: 14px; width: 100%;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding-left: 2px; padding-right: 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="color: inherit; border-bottom: 0.05em solid; word-wrap: break-word; font-weight: 600;" data-token-index="0">Отрабатываемые инструменты</span>: постановка HR-целей в соответствии с правилом СМАРТ.</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="2bd73891-03d7-4d80-afb8-d74795eb0877">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; min-height: 1em; color: rgb(55, 53, 47); -webkit-text-fill-color: rgba(55, 53, 47, 0.5);" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-sub_header-block" style="width: 100%; max-width: 1941px; margin-top: 1.4em; margin-bottom: 1px;" data-block-id="48608daf-8885-426c-99a0-fbd17c7d3ca1">
                    <div style="display: flex; width: 100%; color: inherit; fill: inherit;">
                        <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; font-family: Lyon-Text, Georgia, ui-serif, serif; font-weight: 600; font-size: 1.5em; line-height: 1.3;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-style: italic; font-weight: 600;" data-token-index="0">Модуль 2. Секреты мотивации персонала</span></div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="6ced292e-1221-4e5b-bac5-bd49689cf66a">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-weight: 600;" data-token-index="0">Тема 1. Принятие управленческих решений</span></div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="cd38c324-8180-45cc-8cd8-ec5eef6b7c32">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Понятие управленческого решения</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="d7f5e0ca-c3a8-4a0a-be12-5195e6d9498c">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Составляющие процесса принятия управленческих решений</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="cde27393-47fc-4ebe-a8c7-43af8f33cfee">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Факторы, влияющие на процесс принятия решений</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="5d467812-d07f-451a-972a-5f682c43662b">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-weight: 600;" data-token-index="0">Тема 2. Мотивация персонала</span></div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="98d6cfb3-5d54-435e-8cc1-470b70bfba84">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Понятие и содержание мотивации персонала</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="7d01df4b-f881-4870-9a17-461b9d66a541">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Подходы к мотивации сотрудников</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="977832c8-4eeb-41e6-b0fb-df7377dfc20a">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Самомотивация</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-quote-block" style="width: 100%; max-width: 1941px; margin-top: 4px; margin-bottom: 4px;" data-block-id="83754507-4fb9-476b-855f-72cac5e6a6b5">
                    <div style="font-size: 1em; padding: 3px 2px; color: inherit; fill: inherit; display: flex;">
                        <div style="border-left: 3px solid currentcolor; padding-left: 14px; padding-right: 14px; width: 100%;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding-left: 2px; padding-right: 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="color: inherit; border-bottom: 0.05em solid; word-wrap: break-word; font-weight: 600;" data-token-index="0">Отрабатываемые инструменты</span>: разработка инструментов нематериальной мотивации сотрудников</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="01efc3ab-f10d-455a-92cd-9b813e0630de">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; min-height: 1em; color: rgb(55, 53, 47); -webkit-text-fill-color: rgba(55, 53, 47, 0.5);" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-sub_header-block" style="width: 100%; max-width: 1941px; margin-top: 1.4em; margin-bottom: 1px;" data-block-id="1d9d88bc-0e3f-4cd4-a3dc-44b8d5675fe2">
                    <div style="display: flex; width: 100%; color: inherit; fill: inherit;">
                        <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; font-family: Lyon-Text, Georgia, ui-serif, serif; font-weight: 600; font-size: 1.5em; line-height: 1.3;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-style: italic; font-weight: 600;" data-token-index="0">Модуль 3. Создание здоровой атмосферы в команде</span></div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="5595fe95-2d41-4b75-8e7e-e17de4afd81a">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-weight: 600;" data-token-index="0">Тема 1. Делегирование полномочий</span></div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="7e636329-f86a-49ef-8ccd-329dc77eaf51">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Уровень текучести (в т.ч во время испытательного срока), затраты на персонал, производительность, срок закрытия вакансий.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="a80c2f08-c53c-465b-8ac8-f88633d220b2">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="font-weight: 600;" data-token-index="0">Тема 2. Управление социально-психологическим климатом </span></div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="f1ed0433-a32c-475b-93ca-11f2691978dc">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Удовлетворенность, вовлеченность персонала</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="a550c7da-da68-46fd-a232-9ee44380f81f">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Организационная культура</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-bulleted_list-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="208dcf47-f91c-4118-90ad-c093a041f7b1">
                    <div style="display: flex; align-items: flex-start; width: 100%; padding-left: 2px; color: inherit; fill: inherit;">
                        <div class="pseudoSelection" style="user-select: none; --pseudoselection--background: transparent; margin-right: 2px; width: 24px; display: flex; align-items: center; justify-content: center; flex-grow: 0; flex-shrink: 0; min-height: calc(1.5em + 3px + 3px);" contenteditable="false" data-content-editable-void="true" data-text-edit-side="start">
                            <div class="pseudoBefore" style="font-size: 1.5em; line-height: 1; margin-bottom: 0px; --pseudobefore--fontfamily: Arial; --pseudobefore--content: '&bull;';">&nbsp;</div>
                        </div>
                        <div style="flex: 1 1 0px; min-width: 1px; display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; text-align: left;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">employer бренд работодателя</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-quote-block" style="width: 100%; max-width: 1941px; margin-top: 4px; margin-bottom: 4px;" data-block-id="0a61d4bf-ed2b-49fe-9577-cd42822c87c3">
                    <div style="font-size: 1em; padding: 3px 2px; color: inherit; fill: inherit; display: flex;">
                        <div style="border-left: 3px solid currentcolor; padding-left: 14px; padding-right: 14px; width: 100%;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding-left: 2px; padding-right: 2px;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="color: inherit; border-bottom: 0.05em solid; word-wrap: break-word; font-weight: 600;" data-token-index="0">Отрабатываемые инструменты</span>: инструменты снятия социально-психологической напряженности в коллективе</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="2e5c6263-fb48-4b92-8bc9-5f946d998e82">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; min-height: 1em; color: rgb(55, 53, 47); -webkit-text-fill-color: rgba(55, 53, 47, 0.5);" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-header-block" style="width: 100%; max-width: 1941px; margin-top: 2em; margin-bottom: 4px;" data-block-id="6893becd-68ba-4d12-a05b-1e69e031959c">
                    <div style="display: flex; width: 100%; color: inherit; fill: inherit;">
                        <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; font-family: Lyon-Text, Georgia, ui-serif, serif; font-weight: 600; font-size: 1.875em; line-height: 1.3;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">Успейте зарегистрироваться!</div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 1px;" data-block-id="2916c3de-4424-4595-8395-f3c3c1769da2">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; min-height: 1em; color: rgb(55, 53, 47); -webkit-text-fill-color: rgba(55, 53, 47, 0.5);" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="notion-selectable notion-sub_header-block" style="width: 100%; max-width: 1941px; margin-top: 1.4em; margin-bottom: 1px;" data-block-id="104dcd89-8dd4-4d84-be02-9f540a6d6256">
                    <div style="display: flex; width: 100%; color: inherit; fill: inherit;">
                        <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; font-family: Lyon-Text, Georgia, ui-serif, serif; font-weight: 600; font-size: 1.5em; line-height: 1.3;" contenteditable="false" spellcheck="true" data-content-editable-leaf="true"><span class="notion-enable-hover" style="color: rgba(51, 126, 169, 1); fill: rgba(51, 126, 169, 1);" data-token-index="0">На нашем курсе Вы получите не только уникальные знания, но и помощь и поддержку коллег, обмен опытом.</span></div>
                    </div>
                </div>
                <div class="notion-selectable notion-text-block" style="width: 100%; max-width: 1941px; margin-top: 1px; margin-bottom: 0px;" data-block-id="dbb68bb5-a7a8-49f3-8c0e-fd6915276e87">
                    <div style="color: inherit; fill: inherit;">
                        <div style="display: flex;">
                            <div style="max-width: 100%; width: 100%; white-space: pre-wrap; word-break: break-word; caret-color: rgb(55, 53, 47); padding: 3px 2px; min-height: 1em; color: rgb(55, 53, 47); -webkit-text-fill-color: rgba(55, 53, 47, 0.5);" contenteditable="false" spellcheck="true" data-content-editable-leaf="true">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 0px;" contenteditable="false" data-content-editable-void="true">
            <div style="display: none; flex-shrink: 0; pointer-events: none; width: 0px; position: absolute; right: 303.5px; opacity: 0;">
                <div style="display: flex; flex-direction: column; padding: 5px 16px; width: 340px; flex-shrink: 0; height: 100%; position: relative; pointer-events: none; z-index: 1;">
                    <div style="position: absolute; pointer-events: none; width: 100%; height: 100%; top: -5px; background: linear-gradient(white 0px, rgba(255, 255, 255, 0) 15px);">&nbsp;</div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('footer')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection
