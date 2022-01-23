![](assets/logo.png)

## Transfer your local Blih repositories to Github

[![Functionnal Testing](https://github.com/Arthi-chaud/Blih2Github/actions/workflows/functionnal_test.yaml/badge.svg)](https://github.com/Arthi-chaud/Blih2Github/actions/workflows/functionnal_test.yaml)

Are you an Epitech Student? Are you from a promotion graduation in 2024 or before?
Are tired of having your old school project on your machine, because Epitech's Blih is down? Because you don't want them in your Github repositories? Because transfer would be tideous and you're not sure it'd worth ?

Well you've come to the right place!

Blih2Github allows you to upload your old, dusty and krusty Epitech blih repositories to Github, with a single command. Commits and authors will be preserved.

**Warning**: Since Blih won't ever be up again, Blih2Github removes the Blih remote from the repository and moves it to github (Therefore, you won't be able to push on blih, but that shouldn't be a big concern).

## How does it work

A copy of each repositoy will be pushed in a Github organisation. This organisation will be visible from your profile, but will appear empty: The copy of the repositories will be private. only you will be able to see them.

The script will parse each folder in the directory it is executed in. If a folder is a git repository (i.e. has a ```.git``` folder in it). Using Github's API, it'll create a remote repository in the previously-created organisation. The name of the repo will the name of the folder. Then, it'll add it to the local repo as the origin remote. **If a previous *remote* remote was defined, it'll be overwritten**. Then, a simple ```git push origin master``` and you're ready to go!

## Requirements

To use Blih2Github, you'll need the following:

- A copy of your blih repositories.
- A Github account. You must be able to push using SSH. Otherwise it'll use HTTPS
- A [Github organisation](https://github.com/account/organizations/new?coupon=&plan=team_free)
- A [Github API Key](https://github.com/settings/tokens/new) (Tick '*repo*' to give the acces token the required scopes)
- Bash
- An internet connection
- Linux, Windows or macOs

## Usage

```bash
blih2github $GITHUB_UNAME $GITHUB_ORGA $GITHUB_ACCESSTOKEN $DIR
```

where:

- `$GITHUB_UNAME` is your GitHub username
- `$GITHUB_ORGA` is the name of the organisation
- `$GITHUB_ACCESSTOKEN` is the Github's API Access Token
- `$DIR` is the path to where the blih repositories are

For example:

```bash
blih2github 'Arthi-chaud' 'EpiBlih' 'eW91IHJlYWxseSB0aG91Z2ggSSB3YXMgdGhpcyBzdHVwaWQ/Cg==' 'Semestre 1'
```

## Testing

The script is tested, using GitHub Actions