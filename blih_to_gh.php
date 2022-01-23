<?php

$home = getenv('HOME');
$personnal_gh_token = ''; ## to be completed
$gh_uname = '';
$orga_name = '';
$repos = array_merge(get_repos("B1"), get_repos("B2"));

foreach ($repos as $repo) {
	chdir($repo);
	$repo_name = basename($repo);
	echo "$repo_name\n";
	system("curl -i -u '$gh_uname:$personnal_gh_token' -X POST -H \"Accept: application/vnd.github.v3+json\"	https://api.github.com/orgs/$orga_name/repos -d '{\"name\":\"$repo_name\", \"visibility\": \"private\"}'");
	system("git remote remove origin");
	system("git remote add origin git@github.com:$orga_name/$repo_name.git");
	system("git push origin master");
	chdir("$home/Desktop");
}

function get_repos(string $dir_path): array {
	$repos = [];
	foreach (glob("$dir_path/*") as $dir) {
		if (is_repo($dir))
			$repos[] = $dir;
		else
			$repos = array_merge($repos, get_repos($dir));
	}
	return $repos;
}

function is_repo(string $dir_path): bool {
	return is_dir("$dir_path/.git");
}