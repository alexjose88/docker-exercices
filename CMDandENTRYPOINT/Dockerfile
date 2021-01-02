FROM ubuntu

RUN apt update
RUN apt -y install vim

ENTRYPOINT ["/usr/bin/cat"]
CMD ["/etc/os-release"]