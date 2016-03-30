{**
 * templates/controllers/informationCenter/submissionHistory.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Information Center submission history tab.
 *}

{help file="chapter5/editorial-history/history.md" class="pkp_helpers_align_right"}
<div class="pkp_helpers_clear"></div>

{url|assign:submissionHistoryGridUrl params=$gridParameters router=$smarty.const.ROUTE_COMPONENT component="grid.eventLog.SubmissionEventLogGridHandler" op="fetchGrid" escape=false}
{load_url_in_div id="submissionHistoryGridContainer" url=$submissionHistoryGridUrl}