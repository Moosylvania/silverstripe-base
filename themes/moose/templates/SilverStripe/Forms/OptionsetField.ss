<ul $AttributesHTML>
	<% loop $Options %>
		<li class="$Class">
			<label for="$ID" class="radio">
				$Title
				<input id="$ID" class="radio" name="$Name" type="radio" value="$Value.ATT"<% if $isChecked %> checked<% end_if %><% if $isDisabled %> disabled<% end_if %> <% if $Up.Required %>required<% end_if %> />
				<span></span>
			</label>
		</li>
	<% end_loop %>
</ul>
