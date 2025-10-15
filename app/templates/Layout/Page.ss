<% if $Content %>
    <div class="container">
        $Content
    </div>
<% end_if %>
<% if $Form %>
    <div class="theform container">
        $Form
    </div>
<% end_if %>
<% section Preload %>
<% if $SiteEnvironment != 'development' %>
<script type="speculationrules">
{
    "prerender": [{
        "urls": [
            "/"
        ]
    }]
}
</script>
<% end_if %>
<% end_section %>
