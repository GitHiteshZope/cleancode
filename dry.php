<?php 
    //Not good
    function showDeveloperList(array $developers)
    {
        foreach ($developers as $developer) {
            $expectedSalary = $developer->calculateExpectedSalary();
            $experience = $developer->getExperience();
            $githubLink = $developer->getGithubLink();
            $data = [$expectedSalary, $experience, $githubLink];

            return $data;
        }
    }

    function showManagerList(array $managers)
    {
        foreach ($managers as $manager) {
            $expectedSalary = $manager->calculateExpectedSalary();
            $experience = $manager->getExperience();
            $githubLink = $manager->getGithubLink();
            $data = [$expectedSalary, $experience, $githubLink];

            return $data;
        }
    }


    // Good
    function showList(array $employees)
    {
        foreach ($employees as $employee) {
            $expectedSalary = $employee->calculateExpectedSalary();
            $experience = $employee->getExperience();
            $githubLink = $employee->getGithubLink();
            $data = [$expectedSalary, $experience, $githubLink];

            return $data;
        }
    }

    function showListcompact(array $employees)
    {
        foreach ($employees as $employee) {
            return ([$employee->calculateExpectedSalary(), $employee->getExperience(), $employee->getGithubLink()]);
        }
    }
?>