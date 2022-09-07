<table align="center" border="1" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td>
			<p>{% for initiative in olympic_initiative %}</p>

			<p>{{ initiative.title}}{% endfor %}</p>
			</td>
		</tr>
	</tbody>
</table>
