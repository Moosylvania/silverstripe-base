<label class="checkbox" for="$ID">
    <% if $Title %>$Title<% end_if %>
    <input $AttributesHTML<% if $RightTitle %>aria-describedby="{$Name}_right_title" <% end_if %>/>
    <span></span>
</label>
