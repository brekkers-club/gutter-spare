# gutter-spare


## Contributing

### Requirements

- [Docker](https://www.docker.com/)
- [Taskfile](https://taskfile.dev/#/usage)

### Git Hooks

```shell
git config core.hooksPath .hooks
```

### Useful Commands


Clean up all sail containers

```
./vendor/bin/sail down --rmi all -v
```
