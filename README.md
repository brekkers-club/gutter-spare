# gutter-spare


## Contributing

### Requirements

- [Docker](https://www.docker.com/)
- [Taskfile](https://taskfile.dev/#/usage)


### Development

Start up the local environment

```
cd path/to/gutter-spare && task setup
```

### Git Hooks

```shell
git config core.hooksPath .hooks
```

### Useful Commands


Clean up all sail containers

```
./vendor/bin/sail down --rmi all -v
```
