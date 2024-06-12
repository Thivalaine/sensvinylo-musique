FROM alpine:latest

# Installer les dépendances nécessaires
RUN apk add --no-cache docker-cli openrc

# Ajouter le fichier crontab
COPY crontab /etc/crontabs/root

# Ajouter le script de redémarrage
COPY restart_docker_compose.sh /usr/local/bin/restart_docker_compose.sh

# Donner les permissions d'exécution
RUN chmod +x /usr/local/bin/restart_docker_compose.sh

# Lancer cron en premier plan
CMD ["crond", "-f"]
