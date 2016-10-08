    <body>
        <table width='99%' border=0 class='table' align=center>
            <tr>
                <td>
                    <h2><i class="caret right"></i>{{PageType}}</h2><div align=right>
                    <button class='buttonMenu' name='print' onclick=window.location.href="">Print</button>
                    <button class='buttonMenu' name='edit' onclick=window.location.href="?edit">Edit</button></div>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Project nickname: </b><a class='one' href=''>{{ProjectName}}</a>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Project title: </b>{{ProjectTitle}}
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Implementing organisation: </b><a class='one' href=''>{{ProjectImplementingOrg}}</a>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Country: </b><a class='one' href=''>{{ProjectCountry}}&nbsp;<img src="../src/frontend/templates/general/images/flags/{{ProjectCountry}}.png" height="15" width="15" /> </a>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Location: </b><a class='one' href=''>{{ProjectLocation}}</a>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Field: </b>{{ProjectField}}
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Grant: </b><a class='one' href=''>{{ProjectGrant}}</a>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Main donor: </b><a class='one' href=''>{{ProjectMainDonor}}</a>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Beneficiaries: </b><br/>{{ProjectBeneficiaries}}
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Project manager: </b><a class='one' href=''>{{ProjectPM}}</a>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Project manager assistant: </b><a class='one' href=''>{{ProjectPMA}}</a>
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>
                    <b>Description: </b><br/>{{ProjectDescription}}
                </td>
            </tr>
        </table>
    </body>
