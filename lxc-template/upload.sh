#!/usr/bin/env bash
# =============================================================
# Nahraje LXC template do GitLab Package Registry.
# Spusť po build.sh.
#
# Potřebuješ GitLab Personal Access Token se scopem:
#   api  (nebo write_package_registry)
#
# Použití:
#   GITLAB_TOKEN=glpat-xxxx bash upload.sh [cesta-k-souboru.tar.gz]
# =============================================================
set -euo pipefail

GITLAB_HOST="gitlab.ozelina.eu"
PROJECT_PATH="proxmox/lxc/techdomov"
PROJECT_ENCODED="proxmox%2Flxc%2Ftechdomov"
PACKAGE_NAME="lxc-template"
PACKAGE_VERSION="latest"
REMOTE_FILENAME="debian-12-techdomov_amd64.tar.gz"

TEMPLATE_FILE="${1:-/var/lib/vz/template/cache/debian-12-techdomov_$(date +%Y%m%d)_amd64.tar.gz}"

# ── Checks ────────────────────────────────────────────────────
[[ -n "${GITLAB_TOKEN:-}" ]] || { echo "Chybí GITLAB_TOKEN"; exit 1; }
[[ -f "$TEMPLATE_FILE" ]]   || { echo "Soubor nenalezen: $TEMPLATE_FILE"; exit 1; }

UPLOAD_URL="https://${GITLAB_HOST}/api/v4/projects/${PROJECT_ENCODED}/packages/generic/${PACKAGE_NAME}/${PACKAGE_VERSION}/${REMOTE_FILENAME}"

echo "Nahrávám: $(basename "$TEMPLATE_FILE")"
echo "Do:       ${UPLOAD_URL}"
echo ""

curl --fail --progress-bar \
     --header "PRIVATE-TOKEN: ${GITLAB_TOKEN}" \
     --upload-file "${TEMPLATE_FILE}" \
     "${UPLOAD_URL}"

echo ""
echo "========================================="
echo " Hotovo! URL pro Proxmox CT Templates:"
echo ""
echo " https://oauth2:${GITLAB_TOKEN}@${GITLAB_HOST}/api/v4/projects/${PROJECT_ENCODED}/packages/generic/${PACKAGE_NAME}/${PACKAGE_VERSION}/${REMOTE_FILENAME}"
echo "========================================="
