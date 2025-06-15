import { Controller, Get, Param } from '@nestjs/common';
import { BarangaysService } from './barangays.service';
import { Logger } from '@nestjs/common';
import { Barangay } from 'src/database/entities/barangay.entity';

@Controller('api/v1/barangays')
export class BarangaysController {
    private readonly logger = new Logger(BarangaysController.name);

    constructor(private readonly barangaysService: BarangaysService) { }

    // TODO: Add type for the return value
    @Get()
    getAllBarangays() {
        this.logger.log('Getting all barangays');
        return this.barangaysService.getAllBarangays();
    }

    @Get(':slug')
    getBarangayBySlug(@Param('slug') slug: string): Promise<Barangay | null> {
        return this.barangaysService.getBarangayBySlug(slug);
    }
}
