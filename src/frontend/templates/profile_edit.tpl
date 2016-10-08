    <body>
        <table width='99%' border=0 class='table' align=center>
            <tr>
                <td>
                    <h2><i class="caret right"></i>{{PageType}}</h2><div align=right>
                    <button class='buttonMenu' name='cancel' onclick=window.location.href="profile">Cancel</button></div>
                </td>
            </tr>
            <form method=POST action='?update'>
                <tr>
                    <td>
                        <b>Project nickname: </b>
                        <input type=text name=ProjectName value='{{ProjectName}}'>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Project title: </b>
                        <input type=text name=ProjectTitle value='{{ProjectTitle}}'>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Implementing organisation: </b>
                        <input type=text name=ProjectImplementingOrg value='{{ProjectImplementingOrg}}'>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Country: </b> &nbsp;
                        {{ProjectCountryEDIT}}
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Location: </b>
                        <input type=text name=ProjectLocation value='{{ProjectLocation}}'>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>1st field of intervention:&nbsp;&nbsp;&nbsp; </b>
                        <select name=ProjectField1>
                            <option value=None>None</option>
                            <option value=Health>Health</option>
                            <option value=Agriculture>Agriculture</option>
                        </select>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>2nd field of intervention:&nbsp; </b>
                        <select name=ProjectField3>
                            <option value=None>None</option>
                            <option value=Health>Health</option>
                            <option value=Agriculture>Agriculture</option>
                        </select>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>3rd field of intervention:&nbsp;&nbsp; </b>
                        <select name=ProjectField3>
                            <option value=None>None</option>
                            <option value=Health>Health</option>
                            <option value=Agriculture>Agriculture</option>
                        </select>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Grant: </b>
                        <input type=text name=ProjectGrant value='{{ProjectGrant}}'>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Main donor: </b>
                        <input type=text name=ProjectMainDonor value='{{ProjectMainDonor}}'>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Beneficiaries: </b>
                        <textarea name=ProjectBeneficiaries>{{ProjectBeneficiaries}}</textarea>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Project manager: </b>
                        <input type=text name=ProjectPM value='{{ProjectPM}}'>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Project manager assistant: </b>
                        <input type=text name=ProjectPMA value='{{ProjectPMA}}'>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Description: </b>
                        <textarea name=ProjectDescription>{{ProjectDescription}}</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div align=center ><input type=submit class=buttonMenu name=edit value=Edit></div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
