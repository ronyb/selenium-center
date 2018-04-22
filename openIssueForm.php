<form action="" method="">

    <div class="form-group">
        <label for="issueType">Issue type:</label>
        <select name="issueType" id="issueType" class="form-control">
            <option value="" disabled selected>-- Please select --</option>
            <option value="How to get started with web automation testing">How to get started with web automation testing</option>
            <option value="Can't find element">Can't find element</option>
            <option value="Can't click or send keys to element">Can't click or send keys to element</option>
            <option value="Can't preform advanced operation on elements (drag & drop etc.)">Can't preform advanced operation on elements (drag & drop etc.)</option>
            <option value="Having trouble with webdriver.exe">Having trouble with webdriver.exe</option>
            <option value="My tests are not stable">My tests are not stable</option>
            <option value="Can't upload/download files">Can't upload/download files</option>
            <option value="Browser compatibility problem">Browser compatibility problem</option>
            <option value="Design">Design</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="issueDescription">Issue description:</label>
        <textarea id="issueDescription" placeholder="Issue description" class="form-control" /></textarea>
    </div>

    <div class="form-group">
        <label>Programming Languages used for the automation project:</label>
        <br>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="programmingLanguages" id="Java" value="Java" class="form-check-input" />
            <label for="Java" class="form-check-label">Java</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="programmingLanguages" id="C#" value="C#" class="form-check-input" />
            <label for="C#" class="form-check-label">C#</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="programmingLanguages" id="Python" value="Python" class="form-check-input" />
            <label for="Python" class="form-check-label">Python</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="programmingLanguages" id="Ruby" value="Ruby" class="form-check-input" />
            <label for="Ruby" class="form-check-label">Ruby</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="programmingLanguages" id="PHP" value="PHP" class="form-check-input" />
            <label for="PHP" class="form-check-label">PHP</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="programmingLanguages" id="JavaScript" value="JavaScript" class="form-check-input" />
            <label for="JavaScript" class="form-check-label">JavaScript</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="programmingLanguages" id="Other" value="Other" class="form-check-input" />
            <label for="Other" class="form-check-label">Other</label>
        </div>
    </div>

    <div class="form-group">
        <label>Browser types to support:</label>
        <br>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="browsers" id="Chrome" value="Chrome" class="form-check-input" />
            <label for="Chrome" class="form-check-label">Chrome</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="browsers" id="Firefox" value="Firefox" class="form-check-input" />
            <label for="Firefox" class="form-check-label">Firefox</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="browsers" id="IE" value="IE" class="form-check-input" />
            <label for="IE" class="form-check-label">IE 9+</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="browsers" id="Edge" value="Edge" class="form-check-input" />
            <label for="Edge" class="form-check-label">Edge</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="browsers" id="Safari" value="Safari" class="form-check-input" />
            <label for="Safari" class="form-check-label">Safari</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="browsers" id="Opera" value="Opera" class="form-check-input" />
            <label for="Opera" class="form-check-label">Opera</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="checkbox" name="browsers" id="other_browser" value="Other" class="form-check-input" />
            <label for="other_browser" class="form-check-label">Other</label>
        </div>
    </div>

    <div class="form-group">
        <label for="automationTool">Test automation tool in use:</label>
        <select name="automationTool" id="automationTool" class="form-control">
            <option value="" disabled selected>-- Please select --</option>
            <option value="QTP/UFT">QTP/UFT</option>
            <option value="TestComplete">TestComplete</option>
            <option value="Ranorex">Ranorex</option>
            <option value="TestShell">TestShell</option>
            <option value="Telerik">Telerik</option>
            <option value="Applitools">Applitools</option>
            <option value="Testim.io">Testim.io</option>
            <option value="TestCraft">TestCraft</option>
            <option value="Oxygen">Oxygen</option>
            <option value="Prefecto Mobile">Prefecto Mobile</option>
            <option value="SeeTest">SeeTest</option>
            <option value="In house solution">In house solution</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="codingSkills">Do the automation engineers have coding skills?</label>
        <select name="codingSkills" id="codingSkills" class="form-control">
            <option value="" disabled selected>-- Please select --</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Partially">Partially</option>
        </select>
    </div>

    <div class="form-group">
        <label for="CI">Does your organization use a CI system?</label>
        <select name="CI" id="CI" class="form-control">
            <option value="" disabled selected>-- Please select --</option>
            <option value="No">No</option>
            <option value="Jenkins">Jenkins</option>
            <option value="Hudson">Hudson</option>
            <option value="TFS">TFS</option>
            <option value="TeamCity">TeamCity</option>
            <option value="Bamboo">Bamboo</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="testManagement">Does your organization use a test management tool?</label>
        <select name="testManagement" id="testManagement" class="form-control">
            <option value="" disabled selected>-- Please select --</option>
            <option value="No">No</option>
            <option value="Jira">Jira</option>
            <option value="MTM">MTM</option>
            <option value="QC/ALM">QC/ALM</option>
            <option value="TestLink">TestLink</option>
            <option value="TestRail">TestRail</option>
            <option value="QASymphony">QASymphony</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="sourceControl">What Source Control Management tool Does Your Organization Use?</label>
        <select name="sourceControl" id="sourceControl" class="form-control">
            <option value="" disabled selected>-- Please select --</option>
            <option value="None">None</option>
            <option value="GitHub">GitHub</option>
            <option value="BitBucket">BitBucket</option>
            <option value="SVN">SVN</option>
            <option value="TFS">TFS</option>
            <option value="Mercurial">Mercurial</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="anythingElse">Is there anything else you wish us to know?</label>
        <textarea id="anythingElse" name="anythingElse" placeholder="Anything else..." class="form-control" /></textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Open issue" class="btn btn-primary">
    </div>
</form>