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


## docker

Composer:

    docker-compose run php composer install

Server run

    docker-compose run --service-ports php app/console server:run 0.0.0.0:8000
    
Phpunit

    docker-compose run php bin/phpunit
    
Cache clear

    docker-compose run app/console cache:clear