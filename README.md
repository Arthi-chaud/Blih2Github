![](assets/logo.png)

## Transfer your local Blih repositories to Github

Are you an Epitech Student? Are you from a promotion graduation in 2024 or before?
Are tired of having your old school project on your machine, because Epitech's Blih is down? Because you don't want them in your Github repositories? Because transfer would be tideous and you're not sure it'd worth ?

Well you've come to the right place!

Blih2Github allows you to upload your old, dusty and krusty Epitech blih repositories to Github, with a single command. Commits and authors will be preserved.

**Warning**: Since Blih won't ever be up again, Blih2Github removes the Blih remote from the repository and moves it to github (Therefore, you won't be able to push on blih, but that shouldn't be a big concern).

## How does it work

A copy of each repositoy will be pushed in a Github organisation. This organisation will be visible from your profile, but will appear empty: The copy of the repositories will be private. only you will be able to see them.

The script will parse each folder in the directory it is executed in. If a folder is a git repository (i.e. has a ```.git``` folder in it). Using Github's API, it'll create a remote repository in the previously-created organisation. Then, it'll add it to the local repo as the origin remote. **If a previous *remote* remote was defined, it'll be overwritten**. Then, a simple ```git push origin master``` and you're ready to go!

## Requirements

To use Blih2Github, you'll need the following:

- A copy of your blih repositories.
- A Github account. You must be able to push using SSH.
- A [Github organisation](https://github.com/account/organizations/new?coupon=&plan=team_free)
- A [Github API Key](https://github.com/settings/tokens/new) (Tick *repo* to give the acces token the required scopes)

## Usage