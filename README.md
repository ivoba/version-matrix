# Version Matrix

WIP

Compare dependency versions for multiple similar projects.

## todo

- storage: persist matrix
- reload matrix
- pdf export
- svg export
- file upload
- symlink
- oauth for github & bitbucket
- git chcekout: 
  git archive --remote=git://git.foo.com/project.git HEAD composer.lock | tar -x
  git clone -n git://path/to/the_repo.git --depth 1
  cd the_repo
  git checkout HEAD name_of_file

table colgroup & caption



|               | bundle1       | bundle2  |
| ------------- |:-------------:| --------:|
| project1      | 1.1.1         | 1.2.3    |
| project2      | 1.1.2         | 1.3.3    |
| project3      | 0.0.9         | 1.4.1    |