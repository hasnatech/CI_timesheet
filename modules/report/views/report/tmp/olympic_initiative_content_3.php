<style type="text/css">
    .title {
        color: #385623;
        font-weight: bold;
        padding-top: 10px;
    }
    .report {
        font-size: 23px;
        font-weight: 700;
        font-stretch: 10px;
        letter-spacing: 1px;
    }
    .print {
        font-style: italic;
        font-size: 12px;
    }
    .border-bottom {
        border-bottom: 5px solid green;
    }
    .mt-10 {
        margin-top: 10px;
    }
    .ml-10 {
        margin-left: 10px;
    }
    .ml-20 {
        margin-left: 20px;
    }
    .img-icon {
        height:20px;
        width:20px
    }
    .img-icon-small {
        height:15px;
        width:15px
    }
    .text-icon {
        color:#385623;
        font-family:Times New Roman,serif;
        font-size:21.3333px;
    }
    .border-bottom-2 {
        border-bottom: 2px solid #92d050;
    }
    .background-green {
        background: #e2efd9;
    }
    .text {
        font-size:12px;
    }
    .text-overflow {
        display: -webkit-box;
        overflow: hidden;
        -webkit-line-clamp: 14;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }
    .title-text-overflow {
        display: -webkit-box;
        overflow: hidden;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }
    .description {
        min-height: 280px;
    }
    .tbl-bg {
        background: #a8d08d;
    }
    .text-center {
        text-align: center;
    }
    .tbl {
        width: 100%;
        text-align: center;
    }
    .background-green-2 {
        background: #c5e0b3;
    }
    .d-none {
        display: none;
    }
    .mt-20 {
        margin-top: 20px
    }
    #print_here {
        padding: 10px;
    }
    .mt-8 {
        margin-top: 8px;
    }
</style>

<div id="print_here">
    <div class="row" >
        <div class="col-sm-9">
            <span class="report">REPORT SUMMARY INITIATIVE</span>
        </div>
        <div class="col-sm-3">
            <strong class="title">{{ olympic_initiative.stage}} | {{ olympic_initiative.initiative_status}}</strong><br>
            <span class="print">Print Date: {{ print_date}}</span>
        </div>
        <div class="col-sm-12">
            <div class="border-bottom"></div>
        </div>
    </div>

    <p class="mt-10">
        <img src="/olympic/uploads/icon-report/serch.png" class="img-icon" />
        <span class="text-icon"><strong>Overview</strong></span>
    </p>

    <div class="row ml-10">
        <div class="col-sm-6">
            <div class="border-bottom-2">
                <div class="title">Title</div>
                <div class="title-text-overflow">{{ olympic_initiative.title}}</div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="border-bottom-2">
                <div class="title">Department</div>
                <div class="">{{ department.Department}}</div>
            </div>
            <div class="border-bottom-2 mt-8">
                <div class="title">Owner</div>
                <div class="">{{ owner.full_name}}</div>
            </div>
        </div>
    </div>

    <div class="row ml-10">
        <div class="col-sm-6">
            <div class="border-bottom-2">
                <div class="title">Editor</div>
                <div class="">{{ editor.full_name}}</div>
            </div>
            <div class="border-bottom-2">
                <div class="title">Sponsor</div>
                <div class="">{{sponsor.full_name}}</div>
            </div>
            <div class="border-bottom-2">
                <div class="title">Category</div>
                <div class="">{{ category.category_initiative}}</div>
            </div>
            <div class="border-bottom-2">
                <div class="title">Impact Type</div>
                <div class="">{{ impact_type.impact_type_name}}</div>
            </div>
            <div class="border-bottom-2">
                <div class="title">Implementation Cost</div>
                <div class="">$ <span id="value_implementation_cost"></span></div>
            </div>
            <div class="border-bottom-2">
                <div class="title">Impact Saving</div>
                <div class="">$ <span id="value_impact_saving"></span></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="">
                <div class="title">Description</div>
                <div class="background-green description text-overflow">{{ olympic_initiative.description}}</div>
            </div>
        </div>
    </div>

    <div class="row ml-10">
        <div class="col-sm-12">
            <div class="">
                <div class="title">Calculation Methods</div>
                <div class="background-green">{{ olympic_initiative.calculation_methods}}</div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="">
                <div class="title">Resource and Additional Budget</div>
                <div class="background-green">{{ olympic_initiative.resource_and_additional_budget}}</div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="">
                <div class="title">Comment for Calculation Methods</div>
                <div class="background-green">{{ olympic_initiative.comment_for_calculation_methods}}</div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="">
                <div class="title">Challenge and Constraints</div>
                <div class="background-green">{{ olympic_initiative.challenge_and_constraints}}</div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="">
                <div class="title">Opportunity for Next Improvement</div>
                <div class="background-green">{{ olympic_initiative.opportunity_for_next_improvement}}</div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="">
                <div class="title">Remark</div>
                <div class="background-green">{{ olympic_initiative.remarks}}</div>
            </div>
        </div>
    </div>

    <div class="border-bottom mt-20"></div>

    <p class="mt-10">
        <img src="/olympic/uploads/icon-report/kalender.png" class="img-icon" />
        <span class="text-icon"><strong>Milestone</strong></span>
    </p>

    {% for milestone in olympic_milestone %} {% endfor %}

    <table border="1" cellpadding="1" cellspacing="1" class="tbl ml-20" style="border: none">
        <tbody>
            <tr>
                <td class="tbl-bg"><strong>Title</strong></td>
                <td class="tbl-bg"><strong>Start</strong></td>
                <td class="tbl-bg"><strong>End</strong></td>
                <td class="tbl-bg"><strong>Status</strong></td>
                <td class="tbl-bg"><strong>PIC 1</strong></td>
                <td class="tbl-bg"><strong>PIC2</strong></td>
            </tr>
            {% for milestone in olympic_milestone %}
            <tr>
                <td class="background-green">{{ milestone.title}}</td>
                <td class="background-green">{{ milestone.start_date}}</td>
                <td class="background-green">{{ milestone.end_date}}</td>
                <td class="background-green">{{ milestone.status}}</td>
                <td class="background-green">{{ milestone.pic_1}}</td>
                <td class="background-green">{{ milestone.pic_2}}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class="border-bottom mt-20"></div>

    <p class="mt-10">
        <img src="/olympic/uploads/icon-report/gepokan.png" class="img-icon" />
        <span class="text-icon"><strong>Impact Value</strong></span>
    </p>

    <table border="1" cellpadding="1" cellspacing="1" class="tbl ml-20" style="border: none">

        <tbody>
            <tr>
                <td class="tbl-bg"><strong>Month</strong></td>
                <td class="tbl-bg"><strong>Plan Impact ($)</strong></td>
                <td class="tbl-bg"><strong>Actual Impact ($)</strong></td>
                <td class="tbl-bg"><strong>Impact Verified($)</strong></td>
            </tr>
            <tr>
                <td class="background-green"><strong>Jan</strong></td>
                <td class="background-green"><span id="value_plan_impact_jan"></span></td>
                <td class="background-green"><span id="value_actual_impact_jan"></span></td>
                <td class="background-green"><span id="value_verified_impact_jan"></span></td>
            </tr>
            <tr>
                <td class="background-green-2"><strong>Feb</strong></td>
                <td class="background-green-2"><span id="value_plan_impact_feb"></span></td>
                <td class="background-green-2"><span id="value_actual_impact_feb"></span></td>
                <td class="background-green-2"><span id="value_verified_impact_feb"></span></td>
            </tr>
            <tr>
                <td class="background-green"><strong>Mar</strong></td>
                <td class="background-green"><span id="value_plan_impact_mar"></span></td>
                <td class="background-green"><span id="value_actual_impact_mar"></span></td>
                <td class="background-green"><span id="value_verified_impact_mar"></span></td>
            </tr>
            <tr>
                <td class="background-green-2"><strong>Apr</strong></td>
                <td class="background-green-2"><span id="value_plan_impact_apr"></span></td>
                <td class="background-green-2"><span id="value_actual_impact_apr"></span></td>
                <td class="background-green-2"><span id="value_verified_impact_apr"></span></td>
            </tr>
            <tr>
                <td class="background-green"><strong>May</strong></td>
                <td class="background-green"><span id="value_plan_impact_may"></span></td>
                <td class="background-green"><span id="value_actual_impact_may"></span></td>
                <td class="background-green"><span id="value_verified_impact_may"></span></td>
            </tr>
            <tr>
                <td class="background-green-2"><strong>Jun</strong></td>
                <td class="background-green-2"><span id="value_plan_impact_jun"></span></td>
                <td class="background-green-2"><span id="value_actual_impact_jun"></span></td>
                <td class="background-green-2"><span id="value_verified_impact_jun"></span></td>
            </tr>
            <tr>
                <td class="background-green"><strong>Jul</strong></td>
                <td class="background-green"><span id="value_plan_impact_jul"></span></td>
                <td class="background-green"><span id="value_actual_impact_jul"></span></td>
                <td class="background-green"><span id="value_verified_impact_jul"></span></td>
            </tr>
            <tr>
                <td class="background-green-2"><strong>Aug</strong></td>
                <td class="background-green-2"><span id="value_plan_impact_aug"></span></td>
                <td class="background-green-2"><span id="value_actual_impact_aug"></span></td>
                <td class="background-green-2"><span id="value_verified_impact_aug"></span></td>
            </tr>
            <tr>
                <td class="background-green"><strong>Sep</strong></td>
                <td class="background-green"><span id="value_plan_impact_sep"></span></td>
                <td class="background-green"><span id="value_actual_impact_sep"></span></td>
                <td class="background-green"><span id="value_verified_impact_sep"></span></td>
            </tr>
            <tr>
                <td class="background-green-2"><strong>Oct</strong></td>
                <td class="background-green-2"><span id="value_plan_impact_okt"></span></td>
                <td class="background-green-2"><span id="value_actual_impact_okt"></span></td>
                <td class="background-green-2"><span id="value_verified_impact_okt"></span></td>
            </tr>
            <tr>
                <td class="background-green"><strong>Nov</strong></td>
                <td class="background-green"><span id="value_plan_impact_nov"></span></td>
                <td class="background-green"><span id="value_actual_impact_nov"></span></td>
                <td class="background-green"><span id="value_verified_impact_nov"></span></td>
            </tr>
            <tr>
                <td class="background-green-2"><strong>Dec</strong></td>
                <td class="background-green-2"><span id="value_plan_impact_des"></span></td>
                <td class="background-green-2"><span id="value_actual_impact_des"></span></td>
                <td class="background-green-2"><span id="value_verified_impact_des"></span></td>
            </tr>
            <tr>
                <td class="background-green"><strong>Total</strong></td>
                <td class="background-green"><strong><span id="value_total_plan_impact"></span></strong></td>
                <td class="background-green"><strong><span id="value_total_actual_impact_saving"></span></strong></td>
                <td class="background-green"><strong><span id="value_total_impact_verified"></span></strong></td>
            </tr>
        </tbody>
    </table>

    <div class="border-bottom mt-20"></div>

    <p class="mt-10">
        <img src="/olympic/uploads/icon-report/grup.png" class="img-icon" />
        <span class="text-icon"><strong>Team Member</strong></span>
    </p>

    <table border="0" cellpadding="1" cellspacing="1" width="100%" class="ml-20">
        <tbody>
            {% for member in team %}
            <tr>
                <td>
                    <img alt="" src="/olympic/uploads/icon-report/user.png" class="img-icon-small" />&nbsp;
                    <span>{{ member.fullname}}, {{ member.job_title}} ({{ member.email}})</span>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class="border-bottom mt-20"></div>

    <p class="mt-10">
        <img src="/olympic/uploads/icon-report/folder.png" class="img-icon" />
        <span class="text-icon"><strong>File Repository</strong></span>
    </p>


    <table border="0" cellpadding="1" cellspacing="1" width="100%" class="ml-20">
        <tbody>
            {% for file in olympic_file_repository %}
            <tr>
                <td>
                    <img alt="" src="/olympic/uploads/icon-report/file.png" class="img-icon-small" />&nbsp;
                    <span>{{ file.file_name}}, <a href="http://olympic.reinovasi.com/uploads/olympic_file_repository/{{ file.files}}">Download File</a></span>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class="border-bottom mt-20"></div>

</div>

<div class="d-none">
    <input value="{{ olympic_initiative.implementation_cost}}" id="implementation_cost">
    <input value="{{ olympic_initiative.impact_saving}}" id="impact_saving">

    <input value="{{ olympic_cost_impact_fix.plan_impact_jan }}" id="plan_impact_jan">
    <input value="{{ olympic_cost_impact_fix.plan_impact_feb }}" id="plan_impact_feb">
    <input value="{{ olympic_cost_impact_fix.plan_impact_mar }}" id="plan_impact_mar">
    <input value="{{ olympic_cost_impact_fix.plan_impact_apr }}" id="plan_impact_apr">
    <input value="{{ olympic_cost_impact_fix.plan_impact_may }}" id="plan_impact_may">
    <input value="{{ olympic_cost_impact_fix.plan_impact_jun }}" id="plan_impact_jun">
    <input value="{{ olympic_cost_impact_fix.plan_impact_jul }}" id="plan_impact_jul">
    <input value="{{ olympic_cost_impact_fix.plan_impact_aug }}" id="plan_impact_aug">
    <input value="{{ olympic_cost_impact_fix.plan_impact_sep }}" id="plan_impact_sep">
    <input value="{{ olympic_cost_impact_fix.plan_impact_okt }}" id="plan_impact_okt">
    <input value="{{ olympic_cost_impact_fix.plan_impact_nov }}" id="plan_impact_nov">
    <input value="{{ olympic_cost_impact_fix.plan_impact_des }}" id="plan_impact_des">
    <input value="{{ olympic_cost_impact_fix.total_plan_impact }}" id="total_plan_impact">

    <input value="{{ olympic_cost_impact_fix.actual_impact_jan }}" id="actual_impact_jan">
    <input value="{{ olympic_cost_impact_fix.actual_impact_feb }}" id="actual_impact_feb">
    <input value="{{ olympic_cost_impact_fix.actual_impact_mar }}" id="actual_impact_mar">
    <input value="{{ olympic_cost_impact_fix.actual_impact_apr }}" id="actual_impact_apr">
    <input value="{{ olympic_cost_impact_fix.actual_impact_may }}" id="actual_impact_may">
    <input value="{{ olympic_cost_impact_fix.actual_impact_jun }}" id="actual_impact_jun">
    <input value="{{ olympic_cost_impact_fix.actual_impact_jul }}" id="actual_impact_jul">
    <input value="{{ olympic_cost_impact_fix.actual_impact_aug }}" id="actual_impact_aug">
    <input value="{{ olympic_cost_impact_fix.actual_impact_sep }}" id="actual_impact_sep">
    <input value="{{ olympic_cost_impact_fix.actual_impact_okt }}" id="actual_impact_okt">
    <input value="{{ olympic_cost_impact_fix.actual_impact_nov }}" id="actual_impact_nov">
    <input value="{{ olympic_cost_impact_fix.actual_impact_des }}" id="actual_impact_des">
    <input value="{{ olympic_cost_impact_fix.total_actual_impact_saving }}" id="total_actual_impact_saving">

    <input value="{{ olympic_cost_impact_fix.impact_verified_jan }}" id="impact_verified_jan">
    <input value="{{ olympic_cost_impact_fix.impact_verified_feb }}" id="impact_verified_feb">
    <input value="{{ olympic_cost_impact_fix.impact_verified_mar }}" id="impact_verified_mar">
    <input value="{{ olympic_cost_impact_fix.impact_verified_apr }}" id="impact_verified_apr">
    <input value="{{ olympic_cost_impact_fix.impact_verified_may }}" id="impact_verified_may">
    <input value="{{ olympic_cost_impact_fix.impact_verified_jun }}" id="impact_verified_jun">
    <input value="{{ olympic_cost_impact_fix.impact_verified_jul }}" id="impact_verified_jul">
    <input value="{{ olympic_cost_impact_fix.impact_verified_aug }}" id="impact_verified_aug">
    <input value="{{ olympic_cost_impact_fix.impact_verified_sep }}" id="impact_verified_sep">
    <input value="{{ olympic_cost_impact_fix.impact_verified_okt }}" id="impact_verified_okt">
    <input value="{{ olympic_cost_impact_fix.impact_verified_nov }}" id="impact_verified_nov">
    <input value="{{ olympic_cost_impact_fix.impact_verified_des }}" id="impact_verified_des">
    <input value="{{ olympic_cost_impact_fix.total_impact_verified }}" id="total_impact_verified">
    
</div>

<script type="text/javascript">
    document.getElementById("value_implementation_cost").innerHTML = parseFloat(document.getElementById('implementation_cost').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_impact_saving").innerHTML = parseFloat(document.getElementById('impact_saving').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    document.getElementById("value_plan_impact_jan").innerHTML = parseFloat(document.getElementById('plan_impact_jan').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_feb").innerHTML = parseFloat(document.getElementById('plan_impact_feb').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_mar").innerHTML = parseFloat(document.getElementById('plan_impact_mar').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_apr").innerHTML = parseFloat(document.getElementById('plan_impact_apr').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_may").innerHTML = parseFloat(document.getElementById('plan_impact_may').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_jun").innerHTML = parseFloat(document.getElementById('plan_impact_jun').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_jul").innerHTML = parseFloat(document.getElementById('plan_impact_jul').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_aug").innerHTML = parseFloat(document.getElementById('plan_impact_aug').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_sep").innerHTML = parseFloat(document.getElementById('plan_impact_sep').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_okt").innerHTML = parseFloat(document.getElementById('plan_impact_okt').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_nov").innerHTML = parseFloat(document.getElementById('plan_impact_nov').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_plan_impact_des").innerHTML = parseFloat(document.getElementById('plan_impact_des').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_total_plan_impact").innerHTML = parseFloat(document.getElementById('total_plan_impact').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    document.getElementById("value_actual_impact_jan").innerHTML = parseFloat(document.getElementById('actual_impact_jan').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_feb").innerHTML = parseFloat(document.getElementById('actual_impact_feb').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_mar").innerHTML = parseFloat(document.getElementById('actual_impact_mar').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_apr").innerHTML = parseFloat(document.getElementById('actual_impact_apr').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_may").innerHTML = parseFloat(document.getElementById('actual_impact_may').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_jun").innerHTML = parseFloat(document.getElementById('actual_impact_jun').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_jul").innerHTML = parseFloat(document.getElementById('actual_impact_jul').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_aug").innerHTML = parseFloat(document.getElementById('actual_impact_aug').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_sep").innerHTML = parseFloat(document.getElementById('actual_impact_sep').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_okt").innerHTML = parseFloat(document.getElementById('actual_impact_okt').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_nov").innerHTML = parseFloat(document.getElementById('actual_impact_nov').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_actual_impact_des").innerHTML = parseFloat(document.getElementById('actual_impact_des').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_total_actual_impact_saving").innerHTML = parseFloat(document.getElementById('total_actual_impact_saving').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    document.getElementById("value_verified_impact_jan").innerHTML = parseFloat(document.getElementById('impact_verified_jan').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_feb").innerHTML = parseFloat(document.getElementById('impact_verified_feb').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_mar").innerHTML = parseFloat(document.getElementById('impact_verified_mar').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_apr").innerHTML = parseFloat(document.getElementById('impact_verified_apr').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_may").innerHTML = parseFloat(document.getElementById('impact_verified_may').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_jun").innerHTML = parseFloat(document.getElementById('impact_verified_jun').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_jul").innerHTML = parseFloat(document.getElementById('impact_verified_jul').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_aug").innerHTML = parseFloat(document.getElementById('impact_verified_aug').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_sep").innerHTML = parseFloat(document.getElementById('impact_verified_sep').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_okt").innerHTML = parseFloat(document.getElementById('impact_verified_okt').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_nov").innerHTML = parseFloat(document.getElementById('impact_verified_nov').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_verified_impact_des").innerHTML = parseFloat(document.getElementById('impact_verified_des').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("value_total_impact_verified").innerHTML = parseFloat(document.getElementById('total_impact_verified').value || 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    typeof x === "number" && isNaN(x) 
</script>