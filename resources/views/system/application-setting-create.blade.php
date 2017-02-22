{% extends 'master.html.twig' %}

{% block body %}

    <h3 class="header">Application Setting</h3>

    <form id="application-create" name="application-create" method="post" action="#" class="form-horizontal">

        <div class="form-group">
            <label for="subject" class="col-md-2 control-label">Subject</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            </div>
        </div>

        <div class="form-group">
            <label for="emphasis" class="col-md-2 control-label">Emphasis</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="3" name="emphasis" id="emphasis">Emphasis</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

{% endblock %}