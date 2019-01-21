<!DOCTYPE html>
<html>
    <head>
        <title>Employee</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Employee</h1>
        <table>
            <tbody>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td><?= $empData->name; ?></td>
                </tr>
                <tr>
                    <td><strong>Birth Date:</strong></td>
                    <td><?= $empData->birthdate; ?></td>
                </tr>
                <tr>
                    <td><strong>ID Code/SSN:</strong></td>
                    <td><?= $empData->ssn; ?></td>
                </tr>
                <tr>
                    <td><strong>Current Employee:</strong></td>
                    <td><?= $empData->currentEmployee ? "Yes" : "No"; ?></td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td><?= $empData->email; ?></td>
                </tr>
                <tr>
                    <td><strong>Phone:</strong></td>
                    <td><?= $empData->phone; ?></td>
                </tr>
                <tr>
                    <td><strong>Address:</strong></td>
                    <td><?= $empData->address; ?></td>
                </tr>
            </tbody>
        </table>
        <h1>Employee Info</h1>
        <?php 
        $langs=[
            "en"=>"English",
            "sp"=>"Spanish",
            "fr"=>"French"
            ];
        foreach ($langs as $lang=>$languageName) {
            $introduction=$lang."_introduction";
            $workExperience=$lang."_workExperience";
            $education=$lang."_education";
            ?>
        <h2><?="In ".$languageName?></h2>
            <table>
                <tbody>
                    <tr>
                        <td><strong>Introduction:</strong></td>
                        <td><?= $empData->{$introduction}?  utf8_encode($empData->{$introduction}):"" ?></td>
                    </tr>
                    <tr>
                        <td><strong>Work Experience:</strong></td>
                        <td><?= $empData->{$workExperience}?utf8_encode($empData->{$workExperience}):"" ?></td>
                    </tr>
                    <tr>
                        <td><strong>Education Information:</strong></td>
                        <td><?= $empData->{$education}?utf8_encode($empData->{$education}):"" ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } ?>
         <h1>Log Data</h1>
        <table>
            <tbody>
                <tr>
                    <td><strong>Created By:</strong></td>
                    <td><?= $empData->createdByName?$empData->createdByName:"-"; ?></td>
                </tr>
                <tr>
                    <td><strong>Date Created:</strong></td>
                    <td><?= $empData->datetimeCreated?$empData->datetimeCreated:"-"; ?></td>
                </tr>
                <tr>
                    <td><strong>Updated By:</strong></td>
                    <td><?= $empData->updatedByName?$empData->updatedByName:"-"; ?></td>
                </tr>
                <tr>
                    <td><strong>Date Created:</strong></td>
                    <td><?= $empData->datetimeUpdated?$empData->datetimeUpdated:"-"; ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
