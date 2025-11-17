<% if $Options.Count %>
    <% loop $Options %>
		<div class="clearfix"></div>
        <div class="$Class">
			<label for="$ID" class="checkbox">
				$Title.RAW
            	<input id="$ID" class="checkbox" name="$Name" type="checkbox" value="$Value.ATT"<% if $isChecked %>
                   checked="checked"<% end_if %><% if $isDisabled %> disabled="disabled"<% end_if %> />
            	<span></span>
			</label>
        </div>
    <% end_loop %>
<% else %>
    <p>No options available</p>
<% end_if %>
