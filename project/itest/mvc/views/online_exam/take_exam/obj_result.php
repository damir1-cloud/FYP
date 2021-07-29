
<div class="col-sm-12 do-not-refresh" style="padding-top: 10px">
    <div class="callout callout-danger">
        <h4><?=$this->lang->line('take_exam_warning')?></h4>
        <p><?=$this->lang->line('take_exam_page_refresh')?></p>
    </div>
</div>

<section class="panel">
    <div class="panel-body">
        <div id="printablediv">
            <div class="row">

                <div class="col-sm-3">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <?=profileviewimage($student->photo)?>
                            <h3 class="profile-username text-center"><?=$student->name?></h3>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item" style="background-color: #FFF">
                                    <b><?=$this->lang->line('take_exam_registerNO')?></b> <a class="pull-right"><?=$student->registerNO?></a>
                                </li>
                                <li class="list-group-item" style="background-color: #FFF">
                                    <b><?=$this->lang->line('take_exam_roll')?></b> <a class="pull-right"><?=$student->roll?></a>
                                </li>
                                <li class="list-group-item" style="background-color: #FFF">
                                    <b><?=$this->lang->line('take_exam_class')?></b> <a class="pull-right"><?=inicompute($class) ? $class->classes : ''?></a>
                                </li>
                                <li class="list-group-item" style="background-color: #FFF">
                                    <b><?=$this->lang->line('take_exam_section')?></b> <a class="pull-right"><?=inicompute($section) ? $section->section : ''?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab"><?=$this->lang->line('take_exam_exam_info')?></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <div class="panel-body profile-view-dis">
                                    <div class="row" style="min-height: 250px">

                                        <table class="table table-bordered">
                                            <tr>
                                                <td><?=$this->lang->line('take_exam_total_question')?> : <?=inicompute($onlineExamQuestions)?></td>
                                                <td><?=$this->lang->line('take_exam_total_answer')?> : <?=$totalAnswer?></td>
                                            </tr>
                                            <tr>
                                                <td><?=$this->lang->line('take_exam_total_current_answer')?> : <?=$correctAnswer?></td>
                                                <td><?=$this->lang->line('take_exam_total_mark')?> : <?=$totalQuestionMark?></td>
                                            </tr> 
                                            <tr>
                                                <td><?=$this->lang->line('take_exam_total_obtained_mark')?> : <?=$pp?></td>
                                                <td><?=$this->lang->line('take_exam_total_percentage')?> : <?=($totalPercentages) ?></td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" >
    $('.sidebar-menu li a').css('pointer-events', 'none');

    function disableF5(e) {
        if ( ( (e.which || e.keyCode) == 116 ) || ( e.keyCode == 82 && e.ctrlKey ) ) {
            e.preventDefault();
        }
    }

    $(document).bind("keydown", disableF5);

    function Disable(event) {
        if (event.button == 2)
        {
            window.oncontextmenu = function () {
                return false;
            }
        }
    }
    document.onmousedown = Disable;
</script>