<ul $AttributesHTML>
	<% if $Options.Count %>
		<% loop $Options %>
			<li class="$Class">
				<label for="$ID" class="checkbox">
					$Title.RAW
					<input id="$ID" class="checkbox" name="$Name" type="checkbox" value="$Value.ATT"<% if $isChecked %> checked="checked"<% end_if %><% if $isDisabled %> disabled="disabled"<% end_if %> />
					<span></span>
				</label>
			</li>
		<% end_loop %>
	<% else %>
		<li>No options available</li>
	<% end_if %>
</ul>
