<div style="border:2px solid #000000; padding:3px">
<p style="text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,"><span style="font-size:16px"><strong>REPORT SUMMARY</strong></span><strong><span style="font-size:22.0pt"><span style="font-size:16px"> INITIATIVE&nbsp; &nbsp;</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong></span></span><strong><span style="font-size:12px">{{ olympic_initiative.stage}}</span><span style="font-size:11pt"><span style="font-family:Calibri,"><span style="font-size:22.0pt"><span style="font-size:12px"> | </span></span></span></span><span style="font-size:12px">{{ olympic_initiative.initiative_status}}</span></strong></p>

<p><span style="color:#385623; font-family:Times New Roman,serif"><span style="font-size:21.3333px"><strong><img alt="" src="https://i.ibb.co/xGmRFPM/serch.png" style="height:20px; width:20px" />&nbsp;Overview</strong></span></span></p>

<table border="0" cellpadding="1" cellspacing="1" style="width:500px">
	<tbody>
		<tr>
			<td><strong>Title</strong></td>
			<td><strong>Departement</strong></td>
		</tr>
		<tr>
			<td colspan="1" rowspan="3"><span style="font-size:12px">{{ olympic_initiative.title}}</span></td>
			<td><span style="font-size:12px">{{ department.Department}}</span></td>
		</tr>
		<tr>
			<td><strong>Owner</strong></td>
		</tr>
		<tr>
			<td><span style="font-size:12px">{{ owner.full_name}}</span></td>
		</tr>
		<tr>
			<td colspan="1"><strong>Editor</strong></td>
			<td><strong>Description</strong></td>
		</tr>
		<tr>
			<td colspan="1"><span style="font-size:12px">{{ editor.full_name}}</span></td>
			<td colspan="1" rowspan="11"><span style="font-size:12px">{{ olympic_initiative.description}}</span></td>
		</tr>
		<tr>
			<td colspan="1"><strong>Sponsor</strong></td>
		</tr>
		<tr>
			<td colspan="1"><span style="font-size:12px">{{sponsor.full_name}}</span></td>
		</tr>
		<tr>
			<td colspan="1"><strong>Category</strong></td>
		</tr>
		<tr>
			<td colspan="1"><span style="font-size:12px">{{ category.category_initiative}}</span></td>
		</tr>
		<tr>
			<td colspan="1"><strong>Impact Type</strong></td>
		</tr>
		<tr>
			<td colspan="1"><span style="font-size:12px">{{ impact_type.impact_type_name}}&nbsp;</span></td>
		</tr>
		<tr>
			<td colspan="1"><strong>Implementation Cost</strong></td>
		</tr>
		<tr>
			<td colspan="1">$<span style="font-size:12px">{{ olympic_initiative.implementation_cost}}</span></td>
		</tr>
		<tr>
			<td colspan="1"><strong>Impact Saving</strong></td>
		</tr>
		<tr>
			<td colspan="1"><span style="font-size:12px">${{ olympic_initiative.impact_saving}}</span></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><strong>Calculation Methods</strong></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><span style="font-size:12px">{{ olympic_initiative.calculation_methods}}</span></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><strong>Resource and Additional Budget</strong></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><span style="font-size:12px">{{ olympic_initiative.resource_and_additional_budget}}</span></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><strong>Comment for Calculation Methods</strong></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><span style="font-size:12px">{{ olympic_initiative.comment_for_calculation_methods}}</span></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><strong>Challenge and Constraints</strong></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><span style="font-size:12px">{{ olympic_initiative.challenge_and_constraints}}</span></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><strong>Opportunity for Next Improvement</strong>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><span style="font-size:12px">{{ olympic_initiative.opportunity_for_next_improvement}}</span></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><strong>Remark</strong></td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1"><span style="font-size:12px">{{ olympic_initiative.remarks}}</span></td>
		</tr>
	</tbody>
</table>
&nbsp;

<p><span style="font-size:11pt"><span style="font-family:Calibri,"><strong><span style="font-size:16.0pt"><span style="color:#385623"><img alt="" src="https://i.ibb.co/0stCFhD/kalender.png" style="height:20px; width:20px" />&nbsp;Milestone</span></span></strong></span></span></p>
{% for milestone in olympic_milestone %} {% endfor %}

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td style="text-align:center"><strong>Title</strong></td>
			<td style="text-align:center"><strong>Start</strong></td>
			<td style="text-align:center"><strong>End</strong></td>
			<td style="text-align:center"><strong>Status</strong></td>
			<td style="text-align:center"><strong>PIC 1</strong></td>
			<td style="text-align:center"><strong>PIC2</strong></td>
		</tr>{% for milestone in olympic_milestone %}
		<tr>
			<td><span style="font-size:11px">{{ milestone.title}}</span></td>
			<td style="text-align:center"><span style="font-size:11px">{{ milestone.start_date}}</span></td>
			<td style="text-align:center"><span style="font-size:11px">{{ milestone.end_date}}</span></td>
			<td style="text-align:center"><span style="font-size:11px">{{ milestone.status}}</span></td>
			<td style="text-align:center"><span style="font-size:11px">{{ milestone.pic_1}}</span></td>
			<td style="text-align:center"><span style="font-size:11px">{{ milestone.pic_2}}</span></td>
		</tr>{% endfor %}
	</tbody>
</table>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,"><strong><span style="font-size:16.0pt"><span style="color:#385623"><img alt="" src="https://ibb.co/YBN5Lvp" /><img alt="" src="https://i.ibb.co/60yKW6g/gepokan.png" style="height:20px; width:20px" />&nbsp;Impact Value</span></span></strong></span></span></p>

<table border="1" cellpadding="1" cellspacing="1" style="width:500px">
    
	<tbody>
		<tr>
			<td style="text-align:center"><strong>Month</strong></td>
			<td style="text-align:center"><strong>Plan Impact ($)</strong></td>
			<td style="text-align:center"><strong>Actual Impact ($)</strong></td>
			<td style="text-align:center"><strong>Impact Verified($)</strong></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Jan</strong></td>
			<td style="text-align:center" ><span style="font-size:12px" >{{ olympic_cost_impact_fix.plan_impact_jan}}</span></span></td> 
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_jan}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_jan}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Feb</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_feb}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_feb}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_feb}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Mar</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_mar}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_mar}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_mar}}</span></td>
		</tr>
			<tr>
			<td style="text-align:center"><strong>Apr</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_apr}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_apr}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_apr}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>May</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_may}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_may}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_may}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Jun</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_jun}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_jun}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_jun}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Jul</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_jul}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_jul}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_jul}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Aug</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_aug}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_aug}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_aug}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Sep</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_sep}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_sep}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_sep}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Oct</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_okt}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_okt}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_okt}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Nov</strong></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_nov}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_nov}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_nov}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Dec</strong></td>
			<td style="text-align:center" ><span style="font-size:12px">{{ olympic_cost_impact_fix.plan_impact_des}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.actual_impact_des}}</span></td>
			<td style="text-align:center"><span style="font-size:12px">{{ olympic_cost_impact_fix.impact_verified_des}}</span></td>
		</tr>
		<tr>
			<td style="text-align:center"><strong>Total</strong></td>
			<td style="text-align:center"><strong><span style="font-size:12px">{{ olympic_cost_impact_fix.total_plan_impact}}</span></strong></td>
			<td style="text-align:center"><strong><span style="font-size:12px">{{ olympic_cost_impact_fix.total_actual_impact_saving}}</span></strong></td>
			<td style="text-align:center"><strong><span style="font-size:12px">{{ olympic_cost_impact_fix.total_impact_verified}}</span></strong></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p><strong><span style="font-size:12px"><img alt="" src="https://i.ibb.co/c1H1stV/grup.png" style="height:20px; width:20px" />&nbsp;</span><span style="color:#385623; font-family:Times New Roman,serif"><span style="font-size:21.3333px">Team Member</span></span></strong></p>


<table border="0" cellpadding="1" cellspacing="1" style="width:500px">
	<tbody>
		<tr>{% for member in team %}
			<td>
			<p><img alt="" src="https://i.ibb.co/wCZgXrC/user.png" style="height:15px; width:15px" />&nbsp;<span style="font-size:11px">{{ member.fullname}}, {{ member.job_title}} ({{ member.email}})</span></p>
			</td>
			<td>&nbsp;</td>
		</tr> {% endfor %}
	</tbody>
</table>

<p><span style="color:#385623; font-family:Times New Roman,serif"><span style="font-size:21.3333px"><strong><img alt="" src="https://i.ibb.co/fx2rTYB/folder.png" style="height:20px; width:20px" />&nbsp;File Repository</strong></span></span></p>
 

<table border="0" cellpadding="1" cellspacing="1" style="width:500px">
	<tbody>
		<tr>{% for file in olympic_file_repository %}
			<td><img alt="" src="https://i.ibb.co/kMsQVVJ/file.png" style="height:15px; width:15px" />&nbsp;<span style="font-size:11px">{{ file.file_name}}, <a href="http://olympic.reinovasi.com/uploads/olympic_file_repository/{{ file.files}}">Download File</a></span></td>
			<td>
			<p>&nbsp;</p>
			</td>
		</tr>{% endfor %}
	</tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>
</div>
