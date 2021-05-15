FROM java:8

RUN curl -o /opt/embulk.jar -L "https://dl.embulk.org/embulk-latest.jar"

RUN java -jar /opt/embulk.jar gem install embulk-input-mysql && \
  java -jar /opt/embulk.jar gem install embulk-filter-expand_json && \
  java -jar /opt/embulk.jar gem install embulk-input-mongodb

RUN java -jar /opt/embulk.jar gem install signet -v 0.11
RUN java -jar /opt/embulk.jar gem install representable -v 3.0.4
RUN java -jar /opt/embulk.jar gem install embulk-output-bigquery

WORKDIR /work
ENTRYPOINT ["java", "-jar", "/opt/embulk.jar"]
